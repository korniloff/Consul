<?php

include("inc/settings.php");
    if (!intval($admin_code)) {die("������: ������������� �� �����");}
$oper=$_POST['oper'];

if(!isAllowed("radmin")) {die("� ��� ������������ ���� ��� ��������� ���� ��������");}


    list($admin_name,$admin_login)=mysql_fetch_array(mysql_query("select admin_name,admin_login from {$PREFFIX}_admin where admin_code=$admin_code")  );


//echo $mainquery;
    if (!empty($oper))
    {
        $err=0;
        $admin_c=$_POST["admin_code"];
        foreach($_POST as $name=>$val) if($val=="on") $$name=1;else $$name=0;//$_POST["$name"]=1;else $_POST["$name"]=0;
        $admin_code=$admin_c;
        $query="update {$PREFFIX}_admin set
        admin_radmin=".intval($admin_radmin).",
        admin_rtext=".intval($admin_rtext).",
        admin_rnews=".intval($admin_rnews).",
        admin_requipment=".intval($admin_requipment).",
        admin_rpartner=".intval($admin_rpartner)." where admin_code=".intval($admin_code);
        mysql_query($query) or $err=1;
//           echo htmlspecialchars($query)."<br>";
        header("Location: $PHP_SELF?admin_code=$admin_code&err=$err");
    }

    $mainquery="select admin_radmin, admin_rtext,admin_rnews, admin_requipment, admin_rpartner  from {$PREFFIX}_admin
                where admin_code=$admin_code";
    $res=mysql_query($mainquery);
    list($admin_radmin,$admin_rtext,$admin_rnews,$admin_requipment,$admin_rpartner)=mysql_fetch_array($res);
?>



<? include ("inc/head.php"); ?>

<script language = JavaScript>
function Send(a)
{
document.data.oper.value=a;
document.data.submit();
}
</script>

<BODY>
<center>


<table Border=0 CellSpacing=0 CellPadding=0 class=mainbody>
 <tr valign=top>

  <td>

<?php
echo"<form name='data' action=$PHP_SELF method=POST>";
echo"<input type=hidden name='oper' value=''>";
echo"<input type=hidden name=admin_code value=\"$admin_code\">";
?>

<table class=grayhead Border=0 CellSpacing=0 CellPadding=0 >
 <tr class=normaltext>
  <td ><div ><h4>�������������� ���� ������� ��� �������������� "<?=$admin_name." (�����: $admin_login)"?>"</h4></div></td>
  <td align=right class=wmiddletext></td>
 </tr>
</table>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 width=650 >
 <tr><td class=lmenutext height=30 bgcolor=#ffffff align="center">�����������������</td></tr>
</table>
<table Border=0 CellSpacing=1 class=bluetable CellPadding=4  align=center width=650>
    <tr class=edittabletext height=18 bgcolor="#FFFFFF">
     <td ><input type='checkbox' id="admin_radmin" name="admin_radmin" <?php if($admin_radmin) echo" checked";?>></td><td><label for="admin_radmin">���������� ������������������ � ������� �������</label></td>
     <td ><input type='checkbox' id="admin_rtext" name="admin_rtext" <?php if($admin_rtext) echo" checked";?>></td><td><label for="admin_rtext">���������� ���������� ���������� � ��������</label></td>
    </tr>
</table>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 width=650>
 <tr><td class=lmenutext height=30 bgcolor=#ffffff align="center">������������</td></tr>
</table>
<table Border=0 CellSpacing=1 class=bluetable CellPadding=4 align=center width=650>
    <tr class=edittabletext height=18 bgcolor="#FFFFFF">
       <td  WIDTH=20><input type='checkbox' id="admin_rnews" name="admin_rnews" <?php if($admin_rnews) echo" checked";?>></td><td><label for="admin_rnews">���������� ���������</label></td>
       <td  WIDTH=20><input type='checkbox' id="admin_rpartner" name="admin_rpartner" <?php if($admin_rpartner) echo" checked";?>></td><td><label for="admin_rpatner">���������� ������� ���������</label></td>
       <td WIDTH=20 ><input type='checkbox' id="admin_requipment" name="admin_requipment" <?php if($admin_requipment) echo" checked";?>></td><td><label for="admin_requpment">���������� ��������� ������������</label></td>
    </tr>

</table>




<?php
 if(intval($err)>=10) echo"<div class=smalltext align=center style='color:red; padding:10px; '>������ ��� ���������� ������</div>";
 if((isset($err))&&(intval($err)==0)) echo"<div class=smalltext align=center style='padding:10px; color:#009900;'>������ ����������</div>";
?>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 width=95%>
 <tr height=30><td align="center">
    <input type=button onClick=Send('I') value='��������� ���������'  class=smalltext></td>
 </tr>
 </table>

 </td></tr>
</table>

</form>
  </td>
    <td width=10></td>
</tr>

</table>
</center>

</BODY>
</HTML>
