<?php
    include("inc/settings.php");
//    $page_code=$_GET["page_code"];
//    $page_name=$_GET["page_name"];


//    if (!intval($page_code)) {header("Location: index.php");die();}
    if(!isAllowed("rtext")) {die("� ��� ������������ ���� ��� ��������� ���� ��������");}
    if (!empty($oper))
    {
    	if ($oper=='I')
    	{
    		$err=0;
    		mysql_query("start transaction;");
    		$query="insert into {$PREFFIX}_static (page_code,static_seo_title,static_seo_desc,static_seo_key,lang_code)
    		        values($page_code,'$static_seo_title','$static_seo_desc','$static_seo_key',$langindex)";
    		$result=mysql_query($query) or $err=1;//die("�� ���� �������� ��������:<br>$query<br>".mysql_error());

    		if(!$err)
    		{
    			mysql_query("commit;");
    		}
    		else mysql_query("rollback;");
    	}

    	if ($oper=='U')
    	{
    		$err=0;
    		mysql_query("start transaction;");
    		$query="update {$PREFFIX}_static set static_seo_title='$static_seo_title',
    		static_seo_desc='$static_seo_desc',
    		static_seo_key='$static_seo_key'
    		where (static_code=$static_code)";
    		$result=mysql_query($query) or $err=1;//die("�� ���� �������� ��������:<br>$query<br>".mysql_error());

    		if(!$err)
    		{
    			mysql_query("commit;");
    		}
    		else mysql_query("rollback;");
    	}


    }

    include ("inc/head.php");

?>

<script language="JavaScript">


function reloadPage (selector) {
	self.focus();
//	var index = selector.selectedIndex;
	var value = selector.value;
    <?php
	print 'document.location.href = "editseo.php?page_code='.$page_code.'&page_name='.$page_name.'&langindex=" +value';
	?>
	}


</script>



<BODY>
<center>

<div class=mainbody>

<? include("inc/top.php");?>


<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
  <tr><td  class=pageline>
     <div class=wmiddletext><a href="main.php">����������������� �����</a> &#187; <?echo"$page_name";?></a></div>
  </td>
  <td width=200 class=pageline> <div class=langselect><? include("inc/selectlang.php");?></div>  </td>
  </tr>
</table>
&nbsp;

<?php
 //if (!empty($oper)) echo $oper.'<BR>';
  $mainquery="SELECT static_code, static_seo_title, static_seo_desc, static_seo_key
              FROM  {$PREFFIX}_static
              WHERE (page_code=$page_code) and (lang_code=$langindex)";
//  echo $mainquery.'<br>';
  $mainres=mysql_query($mainquery) or die(mysql_error());
  $mainnum_rows=mysql_num_rows($mainres);
  $main_action=($mainnum_rows>0) ? "U" : "I";
  list($static_code,$static_seo_title, $static_seo_desc, $static_seo_key)=mysql_fetch_array($mainres);
?>

<table Border=0 CellSpacing=0 CellPadding=0 class=mainbody>
 <tr valign=top>

  <td width=10></td>
  <? include("inc/leftmenu.php"); ?>
  <td width=10></td>

  <td>

<table class=grayhead Border=0 CellSpacing=0 CellPadding=0>
 <tr class=normaltext>
  <td ><div ><h4> SEO-����������<a href="mailto:"></a> </h4></div></td>
  <td align=right>  </td>
 </tr>
</table>

<center>

<table Border=0 CellSpacing=0 CellPadding=0 width=650>
     <tr><td>&nbsp;</td></tr>
     <tr><td class=lmenutext align=center><a href="<?=$_SESSION["pageback"]?>">[ ����� ]</a><br>
</table>


     <form name=data action=<?=$PHP_SELF;?> method=POST>
     <input type=hidden name=oper value='<?=$main_action?>'>
     <input type=hidden name=page_code value=<?=$page_code;?>>
     <input type=hidden name=page_name value=<?=$page_name;?>>
     <input type=hidden name=langindex value=<?=$langindex;?>>

     <?php
      if ($mainnum_rows>0) echo' <input type=hidden name=static_code value='.$static_code.'>';
     ?>

<table Border=0 CellSpacing=0 CellPadding=0 width=650>
 <tr><td height=10></td></tr>
 <tr>
  <td bgcolor=#f9f9f9 style='padding:10px'>
  <center><input type=submit class=smalltext value='��������� ���������'></center>
  <table Border=0 CellSpacing=0 CellPadding=0>
   <tr><td class=lmenutext colspan=5><a>��������� (title) [<?=$langname;?>] :</a><br>
       <textarea name='static_seo_title' style="width:630px;" rows=2><?=$static_seo_title;?></textarea><p>
     </td></tr>

     <tr><td height=5></td></tr>

     <tr><td class=lmenutext colspan=5><a>��������  (description) [<?=$langname;?>] :</a><br>
       <textarea name='static_seo_desc' style="width:630px;" rows=5><?=$static_seo_desc;?></textarea><p>
     </td></tr>

     <tr><td class=lmenutext colspan=5><a>�������� ����� (keywords) [<?=$langname;?>] :</a><br>
       <textarea name='static_seo_key' style="width:630px;" rows=3><?=$static_seo_key;?></textarea><p>
     </td></tr>

  </table>
  </td>
 </tr>
 <tr><td bgcolor=#f9f9f9 ><center><input type=submit class=smalltext value='��������� ���������' )></td></tr>
 <tr><td height=10 bgcolor=#f9f9f9 height=0></td></tr>
 <tr><td height=10 height=0></td></tr>
</table>
 </form>

<table Border=0 CellSpacing=0 CellPadding=0 width=650>
     <tr><td class=lmenutext align=center><a href="<?=$_SESSION["pageback"]?>">[ ����� ]</a><br><br>
</table>

</center>

  </td>
    <td width=10></td>
</tr>

</table>
</div>
</center>

</BODY>
</HTML>
