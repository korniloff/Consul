<?php
include("inc/settings.php");
$oper=$_POST['oper'];

if (!isset($icon)) $icon=150;

$per_page=10;

if(!$REGUSER["name"]) {die("� ��� ������������ ���� ��� ��������� ���� ��������");}


if(!($sortby)) $sortby='picpos'; else {$sortby=explode(" ",$sortby);$sortby=$sortby[0];}
if(!intval($sortdir)) {$sortdir="";$realsortdir="ASC";} else {$sortdir="1";$realsortdir="DESC";}


if (!empty($oper))
{
if ($oper=='I')
{
  $newicon=$icon+1;

  $resu=mysql_query("select max(picture_code) from {$PREFFIX}_picture");
  $newunitcode=mysql_result($resu,0,0);
  $newunitcode=$newunitcode+1;

  if ($_FILES['picbig'])
  {
      $r=basename($_FILES['picbig']['name']);
      $o=strlen($r);$ext="";
      while(($r[$o]!=".")&&($o>=0))
           { $ext=$r[$o].$ext; $o--;  }
      $big="big".$newunitcode.".".$ext;
      $small="small".$newunitcode.".".$ext;
      $top="top".$newunitcode.".".$ext;
  }
  if ($_FILES['picbig'])
  {
      move_uploaded_file($_FILES['picbig']['tmp_name'],"../images/$big");
      $size = GetImageSize ("../images/$big");
      $itype=$size[2];
      if ($itype==IMAGETYPE_JPEG)  $im=imagecreatefromjpeg("../images/$big");
      elseif ($itype==IMAGETYPE_PNG)  $im=imagecreatefrompng("../images/$big");
            else die("<div align=center>������ ��� ����������� �� ��������������. <a href='javascript:history.back(-1);'>�����</a></div>");
      if(trim($LOGOFILE)&&($watermark==1))
      {
        // ��������� ����������
        putWatermark("../images/$big",$LOGOFILE,"../images/$big","bottomright");
      }
      $rate=$size[0]/$icon;
      $height=round($size[1]/$rate);
      $imsm=imagecreatetruecolor($icon,$height);
      imagecopyresampled($imsm, $im, 0, 0, 0, 0, $icon, $height, $size[0], $size[1]);
      if ($itype==IMAGETYPE_JPEG)  $im1=imagejpeg($imsm,"../images/$small");
      elseif ($itype==IMAGETYPE_PNG) $im1=imagepng($imsm,"../images/$small");
  }
  $res=mysql_query("update {$PREFFIX}_picture set picpos=picpos+1 where picpos>=$picpos and page_code=$page_code");
  $query="insert into {$PREFFIX}_picture (page_code,picsmall,picbig,picpos,piccomment,piccomment_en) values($page_code,'$small','$big',$picpos,'$piccomment','$piccomment_en')";
//  echo"$query";
  $result=mysql_query($query) or die("Cannot Insert Picture") ;
//��� �������������-------------------------------------------------------------
  $query="select picture_code from {$PREFFIX}_picture where page_code=$page_code order by $sortby $realsortdir";
  $result=mysql_query($query) or die("Incorrect Currpage Query") ;
  $num_pages=mysql_num_rows($result);
  for($i=0;$i<$num_pages;$i++)
        if (mysql_result($result,$i,0)==$newunitcode) break;
  $curr_p=ceil($i/$per_page)-1;
 if ($curr_p==-1) $curr_p=0;
//------------------------------------------------------------------------------
 RenumeratePos("{$PREFFIX}_picture","picture_code","picpos","page_code",$page_code);
}

if ($oper=="D")
{
  while (list($key,$value)=each($_POST))
  {
      unset($arr);
      $arr=explode('#',$key);
      $varName=$arr[0];
      $varCode=$arr[1];
      $varPos=$arr[2];
      $varExt=$arr[3];
//      echo"varCode=$varCode<br>varName=$varName<br>varPos=$varPos<br>";
      if ( ($varName=="C")&&($value=="on"))
      {
         $delquery="select picsmall,picbig from {$PREFFIX}_picture where picture_code=$varCode";
         $delres = mysql_query($delquery) or die ("Cannot Select Delete Picture.");
         list($delsmall,$delbig)=mysql_fetch_array($delres);

         $query = "delete from {$PREFFIX}_picture where picture_code=$varCode";
         $resultdel = mysql_query($query) or die ("Cannot Delete Picture.");
//�������� ������ �� �������-----------------------------------------
            $picbig="../images/".$delbig;
            $picsmall="../images/".$delsmall;
            unlink($picbig); unlink($picsmall);
//------------------------------------------------------------------------------
         $res=mysql_query("update {$PREFFIX}_picture set picpos=picpos-1 where picpos>$varPos and page_code=$page_code");
      }
  }
 RenumeratePos("{$PREFFIX}_picture","picture_code","picpos","page_code",$page_code);
}//oper=D

if (!strcasecmp($oper,"U"))
{
/*
echo"<pre>";
print_r($_POST);
echo"</pre>";
*/
  while (list($key,$value)=each($_POST))
  {
      $arr=explode('#',$key);
      $varName=$arr[0];
      $varCode=$arr[1];
      $varPos=$arr[2];
      $varExt=$arr[3];
      $varField=$arr[4];
      $varType=$arr[5];
//      echo"varCode=$varCode<br>varName=$varName<br>varPos=$varPos<br>";

    if ($_POST["C#$varCode#$varPos#$varExt"]=="on")
      if ($varName=="F")
      {
         if ($varType=="string") $tmp="'"; else $tmp="";
         $sqlupd = "update {$PREFFIX}_picture set $varField=$tmp".$value."$tmp where picture_code=$varCode";
//         echo"$sqlupd";
         $resultupd = MYSQL_QUERY($sqlupd) or die ("Cannot Update Picture.");

         if ($varField=="picpos")
         {
           $newpos=$value;
           $oldpos=$varPos;
           //������� ����
           if ($oldpos<$newpos) mysql_query("update {$PREFFIX}_picture set picpos=picpos-1 where picpos<=$newpos and picpos>$oldpos and page_code=$page_code");
           //������� �����
           if ($oldpos>$newpos) mysql_query("update {$PREFFIX}_picture set picpos=picpos+1 where picpos>=$newpos and page_code=$page_code");
           mysql_query("update {$PREFFIX}_picture set picpos=$newpos where picture_code=$varCode");
           RenumeratePos("{$PREFFIX}_picture","picture_code","picpos","page_code",$page_code);
         }
      }//if ($varName=="F")
  }//while
}//if  (UPD)
   if($sortby) $tmp="&sortby=$sortby&sortdir=$sortdir";else $tmp="";
   header("Location: $PHP_SELF?back=$back&curr_page=$curr_page&curr_p=$curr_p&artist_code=$artist_code&page_code=$page_code&icon=$icon$tmp&watermark=$watermark");
}//empty
?>



<? include ("inc/head.php"); ?>

<script language = JavaScript>
function Send(a)
{
document.data.oper.value=a;
document.data.submit();
}

function change_line(Check,Unit)
{
Elem=document.getElementById("C#"+Check);
Elem.checked=true;
Unit=document.getElementById(Unit);
while ((Unit.id==null)||(Unit.id.indexOf('#')==0)) Unit=Unit.parentElement;
var name=Unit.id;
var value=Unit.innerHTML.replace("'","&#39;");
if (value.indexOf('<input')>=0) return ;
res = "<input style='width:100%;' class=smalltext name='"+name+"' value='" + value+"'>";
Unit.innerHTML = res;
}

function ConfirmSend(a)
{
    document.data.oper.value=a;
    document.data.submit();
}

</script>

<BODY>
<center>

<div class=mainbody>

<? include("inc/top.php"); ?>

<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
  <tr><td class=pageline>
     <div class=wmiddletext><a href="main.php">����������������� �����</a> &#187; <a>�����������</a></div>
  </td></tr>
</table>
&nbsp;


<table Border=0 CellSpacing=0 CellPadding=0 class=mainbody>
 <tr valign=top>

  <td width=10></td>
  <? include("inc/leftmenu.php"); ?>
  <td width=10></td>

  <td>

<?php
echo"<form name='data' action=$PHP_SELF method=POST enctype=\"multipart/form-data\">";
echo"<input type=hidden name='oper' value=''>";
echo"<input type=hidden name=curr_page value=\"$curr_page\">";
echo"<input type=hidden name=curr_p value=\"$curr_p\">";
echo"<input type=hidden name=sortby value=\"$sortby\">";
echo"<input type=hidden name=sortdir value=\"$sortdir\">";
echo"<input type=hidden name=back value=\"$back\">";
?>

<table class=grayhead Border=0 CellSpacing=0 CellPadding=0 >
 <tr class=normaltext>
  <td ><div ><h4>�����������</h4></div></td>
  <td align=right class=wmiddletext><a class=submenu onclick="displayform(this,'�������� �����������')">�������� �����������</a></td>
 </tr>
</table>

<?php

if ($page_code==0)
{
  $rt=mysql_query("SELECT count(page_code) FROM {$PREFFIX}_page where page_code>0") or die("Unable to Comply Request");
  $pagecnt=mysql_query($rt);
  if ($pagecnt==0)
      die ("<div align=center><B>������ : ������ � ������������� ����������, ��� ��� �� ���������� �� ����� �������� �������. ���������� <a class=blue href=page.php><u>�������� �������</u></a> � ��������� ������.</B></div>");

}
?>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0>
 <tr><td bgcolor=#ffffff height=10></td></tr>
 <tr><td>
 <center>
 <table cellpadding=2 cellspacing=0>
 <tr height=30>
    <td class=lmenutext>����������� �������:</td>
    <td width=5></td>
    <td><select class=smalltext style='width:300px;' name=page_code>
<?php
   $q="select page_code, page_name from {$PREFFIX}_page order by page_name";
   $pageres=mysql_query($q);
   while(list($page_c,$page_n)=mysql_fetch_array($pageres))
   {
         if($page_code==$page_c) $tmp=" selected";else $tmp="";
         echo"<option value='$page_c' $tmp>".stripslashes($page_n)."</option>";
   }
?>
    </select></td>
    <td width=5></td>
    <td><input type=submit class=smalltext value='�������'></td>
 </tr>
 </table>
 </td></tr>
</table>

<div id=addform>
<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0>
 <tr><td colspan=3  bgcolor=#ffffff height=10></td></tr>
 <tr><td colspan=10 class=blueheadcolor><center><div class=normaltext>�������� �����������</div></center></td></tr>
 <tr><td colspan=3  height=1 bgcolor=#ffffff></td></tr>
 <tr><td>
 <center>
 <table cellpadding=2 cellspacing=0>
 <tr height=30 >
    <td class=lmenutext>�����������:</td>
    <td width=5></td>
    <td><input name='picbig' type=file style="width:150px" class=smalltext></td>
    <td width=5></td>
    <td class=lmenutext>������&nbsp;������:</td>
    <td width=5></td>
    <td><input name=icon value='<?=$icon;?>' type=text style="width:50px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>����������:</td>
    <td width=5></td>
    <td colspan=5><input name=piccomment type=text style="width:320px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>���������� (����):</td>
    <td width=5></td>
    <td colspan=5><input name=piccomment_en type=text style="width:320px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>�������:</td>
    <td width=5></td>
    <td><input name=picpos value='1000' type=text style="width:100px" class=smalltext></td>
    <td width=5></td>
    <td class=lmenutext>������� ����:</td>
    <td width=5></td>

    <?
      if (!isset($watermark)||($watermark==2))  {$wno="selected"; $wye="";}
      else {$wye="selected"; $wno="";}
    ?>

    <td><select name=watermark style="width:50px" class=smalltext><option value=1 <?echo"$wye"?> > �� </option><option value=2 <?echo"$wno"?>> ��� </option></select></td>
    <td width=5></td>
 </tr>
 </table>
 </td>

 <td class=helpzone>

     <table Border=0 CellSpacing=1 CellPadding=0 bgcolor=#999999 class=helptable>
       <tr>
        <td class=helptd>

             <div class=ssmalltext>
                �������� �����������, ��������� ������ "�����". ��������� ����������� ���� ����� � ������� ������ "�������� �����������". ��� ��������� ������������������ ����������� � �������, �������� ���� "�������".
             </div>

        </td>
       </tr>
     </table>

 </td>


 </tr>
 <tr><td colspan=3 height=1 bgcolor=#ffffff></td></tr>
 <tr><td colspan=10 class=blueheadcolor><center><input type=button onClick=Send('I') value='�������� �����������'  class=smalltext></td></tr>
</table>
</div>


<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 >
 <tr><td class=lmenutext height=30 bgcolor=#ffffff align="center">������ �����������</td></tr>
</table>

<?

$res=mysql_query ("SELECT picture_code,page_code,picsmall,picbig,picpos,piccomment,piccomment_en FROM {$PREFFIX}_picture where page_code=$page_code order by $sortby $realsortdir") or die ("Cannot Select Picture");
  $num_rows=mysql_num_rows($res);
  if($num_rows)
  {
      $page_quant=ceil($num_rows / $per_page); //����� �������
  }

if ($page_quant>1)
{
echo"<div align=left class=smalltext><b>��������:</b>  ";

if($sortby) $tmp="&sortby=$sortby&sortdir=$sortdir";else $tmp="";

for ($i=1;$i<$page_quant+1;$i++)
 {
   $y=$i-1;
   if ($curr_p==$y) {$t1="<b>";$t2="</b>";} else {$t1="";$t2="";}
   echo"<a class=blue href=$PHP_SELF?back=$back&curr_page=$curr_page&curr_p=$y&artist_code=$artist_code&page_code=$page_code&icon=$icon$tmp>$t1 $i $t2 |</a>&nbsp";
 }
echo"</div><br>";
}


?>


<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0>
 <tr><td>
 <center>
 <table>
 <tr height=30 >
    <td><input type=button onClick=Send('U') value='�������� ����������' class=smalltext></td>
    <td width=5></td>
    <td><input type=button onClick=Send('D') value='������� ����������'  class=smalltext></td>
 </tr>
 </table>
 </td></tr>
</table>

<table Border=0 CellSpacing=1 class=bluetable CellPadding=4 width=100%>
  <tr class=lmenutext height=20 align=center bgcolor=#ffffff>
    <td width=20>&nbsp;</td>
    <td><?=SortTitle("�����������","piccomment",$sortby,$sortdir);?></td>
    <td><?=SortTitle("����������� (����)","piccomment_en",$sortby,$sortdir);?></td>
    <td width=180>�����������</td>
    <td width=80><?=SortTitle("�������","picpos",$sortby,$sortdir);?></td>
  </tr>

<?php
  if($num_rows)
  {
      $page_quant=ceil($num_rows / $per_page); //����� �������
    $start_pos=$curr_p*$per_page;
    if ($start_pos+$per_page<$num_rows) $end_pos=$start_pos+$per_page;
       else $end_pos=$num_rows;
    mysql_data_seek($res,$start_pos);
    for ($x=$start_pos; $x<$end_pos; $x++)
    {
    list($picture_code,$p_c,$picsmall,$picbig,$picpos,$piccomment,$piccomment_en)=mysql_fetch_array($res);
    DevideFile($picsmall,$name,$ext);
    $picsmall="../images/".$picsmall;
    $checkname=$picture_code."#".$picpos."#".$ext;
    echo"<tr class=edittabletext height=18 align=center bgcolor=#ffffff>";
    echo"<TD width=20 align=center ><input type='checkbox' name=\"C#$checkname\" id=\"C#$checkname\"></TD>";
    echo"<TD ondblclick='change_line(\"$checkname\",\"F#$checkname#piccomment#string\")' id=\"F#$checkname#piccomment#string\" class=smalltext>".Show($piccomment)."</TD>\n";
    echo"<TD ondblclick='change_line(\"$checkname\",\"F#$checkname#piccomment_en#string\")' id=\"F#$checkname#piccomment_en#string\" class=smalltext>".Show($piccomment_en)."</TD>\n";
    echo"<TD class=normaltext><img src=$picsmall></TD>\n";
    echo"  <td ondblclick='change_line(\"$checkname\",\"F#$checkname#picpos#int\");' class=smalltext id=\"F#$checkname#picpos#int\">".Show($picpos)."</td>";
    echo"</TR>\n";
    } //end for x
  }//if($num_rows)

?>

</table>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 width=95%>
 <tr><td>
 <center>
 <table>
 <tr height=30 >
    <td><input type=button onClick=Send('U') value='�������� ����������' class=smalltext></td>
    <td width=5></td>
    <td><input type=button onClick=Send('D') value='������� ����������'  class=smalltext></td>
 </tr>
 </table>
 </td></tr>
</table>
<p>
<center><a href="<?=$_SESSION["pageback"]?>" class=smalltext> [�����] </a></center>
<br>
<?php
{
echo"<div align=left class=smalltext><b>��������:</b>  ";

if($sortby) $tmp="&sortby=$sortby&sortdir=$sortdir";else $tmp="";

for ($i=1;$i<$page_quant+1;$i++)
 {
   $y=$i-1;
   if ($curr_p==$y) {$t1="<b>";$t2="</b>";} else {$t1="";$t2="";}
   echo"<a class=blue href=$PHP_SELF?back=$back&curr_page=$curr_page&curr_p=$y&artist_code=$artist_code&page_code=$page_code&icon=$icon$tmp>$t1 $i $t2 |</a>&nbsp";
 }
echo"</div>";
}
?>

</form>
  </td>
    <td width=10></td>
</tr>

</table>
</div>
<br>
</center>

</BODY>
</HTML>
