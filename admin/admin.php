<?php
include("inc/settings.php");

if(!isAllowed("radmin")) {die("� ��� ������������ ���� ��� ��������� ���� ��������");}

$oper=$_POST['oper'];
$per_page=3000;

if(!($sortby)) $sortby='admin_name'; else {$sortby=explode(" ",$sortby);$sortby=$sortby[0];}
if(!intval($sortdir)) {$sortdir="";$realsortdir="ASC";} else {$sortdir="1";$realsortdir="DESC";}

if (!empty($oper))
{
if ($oper=='I')
{
 $err=0;

mysql_query("start transaction;");
 $query="insert into {$PREFFIX}_admin (admin_code,admin_name,admin_login,admin_pass,admin_email,admin_active) values(0,'$admin_name','$admin_login',md5('$admin_pass'),'$admin_email',$admin_active)";
 $result=mysql_query($query) or $err=1;

if(!$err)
  {
      mysql_query("commit;");
  }
  else mysql_query("rollback;");

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
//      echo"varCode=$varCode<br>varName=$varName<br>varPos=$varPos<br>";
      if ( ($varName=="C")&&($value=="on"))
      {
         $err=0;
         $query = "delete from {$PREFFIX}_admin where admin_code=$varCode";
         $resultdel = mysql_query($query) or $err+=10;
      }
  }
}//oper=D

if (!strcasecmp($oper,"U"))
{
  $err=0;
  while (list($key,$value)=each($_POST))
  {
      $arr=explode('#',$key);
      $varName=$arr[0];
      $varCode=$arr[1];
      $varField=$arr[2];
      $varType=$arr[3];

    if ($_POST["C#$varCode"]=="on")
    {
      if ($varName=="F")
      {
         if ($varType=="string") $tmp="'"; else $tmp="";
         if($varField=="admin_pass") $value=md5($value);
         $sqlupd = "update {$PREFFIX}_admin set $varField=$tmp".$value."$tmp  where admin_code=$varCode";
//         echo"$sqlupd";
            $resultupd = MYSQL_QUERY($sqlupd) or $err-=10;
      }//if ($varName=="F")
     }
  }//while
}//if  (UPD)
   if($sortby) $tmp="&sortby=$sortby&sortdir=$sortdir";else $tmp="";
   header("Location: $PHP_SELF?err=$err$tmp");
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

function change_yes_no(Check,Unit){
Elem=document.getElementById("C#"+Check);
Elem.checked=true;
Unit=document.getElementById(Unit);
while ((Unit.id==null)||(Unit.id.indexOf('#')==0)) Unit=Unit.parentElement;
var name=Unit.id;
var value=Unit.innerHTML.replace("'","&#39;");
if (value.indexOf('<SELECT')>=0) return ;
res = "<SELECT style='width:100%' class=smalltext name='"+name+"'><OPTION VALUE=0>���</OPTION><OPTION VALUE=1>��</OPTION></SELECT>";
Unit.innerHTML = res;
}

function Generate(len)
{
 alph="1234567890qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
 st="";
 for(i=0;i<len;i++)
 {   m=Math.round(Math.random()*100) % 62; st+=alph.charAt(m); }
 return st;
}

function change_pass(Check,Unit)
{
Elem=document.getElementById("C#"+Check);
Elem.checked=true;
Unit=document.getElementById(Unit);
while ((Unit.id==null)||(Unit.id.indexOf('#')==0)) Unit=Unit.parentElement;
var name=Unit.id;
var value=Unit.innerHTML.replace("'","&#39;");
if (value.indexOf('<input')>=0) return ;
res = "<input style='width:100%;' class=smalltext name='"+name+"' value='" + Generate(8)+"'>";
Unit.innerHTML = res;
}

function editperm(code)
{
urlstr='permission.php?admin_code='+code;
msg=window.open(urlstr,"EditWindow"+code,"toolbar=no,directories=no,menubar=no,scrollbars=yes,status=no,resizable=no,width=1000,height=600");
}

function ConfirmSend(a)
{
if (confirm('�� �������, ��� ������ ������� ��������������?'))
 {
    document.data.oper.value=a;
    document.data.submit();
 }
}

</script>

<BODY>
<center>

<div class=mainbody>
<? include("inc/top.php");
$mainquery="SELECT admin_code,admin_name,admin_login,admin_email,admin_active FROM {$PREFFIX}_admin order by $sortby $realsortdir";
//echo"$mainquery";
?>


<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
  <tr><td class=pageline>
     <div class=wmiddletext><a href="main.php">����������������� �����</a> &#187; <a href="admin.php">���������� ��������</a></div>
  </td></tr>
</table>
&nbsp;

<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
 <tr valign=top>

  <td width=10></td>
  <? include("inc/leftmenu.php"); ?>
  <td width=10></td>

  <td>

<?php
echo"<form name='data' action=$PHP_SELF method=POST>";
echo"<input type=hidden name='oper' value=''>";
echo"<input type=hidden name=curr_page value=\"$curr_page\">";
echo"<input type=hidden name=sortby value=\"$sortby\">";
echo"<input type=hidden name=sortdir value=\"$sortdir\">";
?>

<table class=grayhead Border=0 CellSpacing=0 CellPadding=0 >
 <tr class=normaltext>
  <td ><div><h4>���������� ��������</h4></div></td>
  <td align=right class=wmiddletext><a class=submenu onclick="displayform(this,'�������� ��������������')">�������� ��������������</a></td>
 </tr>
</table>

<div id=addform>
<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0>
 <tr><td colspan=3 bgcolor=#ffffff height=10></td></tr>
 <tr><td colspan=10 class=blueheadcolor><center><div class=normaltext>�������� ������� ������ ��������������</div></center></td></tr>
 <tr><td colspan=3 bgcolor=#ffffff></td></tr>
 <tr><td>
 <center>
 <table cellpadding=2 cellspacing=0>
 <tr height=30 >
    <td class=lmenutext>���:</td>
    <td width=5></td>
    <td><input name='admin_name' type=text style="width:250px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>�����:</td>
    <td width=5></td>
    <td><input name='admin_login' type=text style="width:250px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>������:</td>
    <td width=5></td>
    <td><input name='admin_pass' type=text style="width:250px" class=smalltext></td>
 </tr>
 <tr height=30 >
    <td class=lmenutext>E-Mail:</td>
    <td width=5></td>
    <td><input name='admin_email' type=text style="width:250px" class=smalltext></td>
 </tr>

 <tr height=30 >
    <td class=lmenutext>����������:</td>
    <td width=5></td>
    <td><select  name=admin_active class=smalltext style="width:250px"><option value='1' selected> �� </option><option value='0'> ��� </option></select></td>
 </tr>
 </table>
 </td>


 <td class=helpzone>

     <table Border=0 CellSpacing=1 CellPadding=0 bgcolor=#999999 class=helptable>
       <tr>
        <td class=helptd>

             <div class=ssmalltext>
                ��������� ���� ����� � ������� ������ "�������� ������� ������". ����� ���������� ������� ������ ��������� ����� ������� ������ ��������������, ������� �� ������ � �������������� ������, � ����������� ������� ������ ��������������. </a>
             </div>

        </td>
       </tr>
     </table>

 </td>



 </tr>
 <tr><td colspan=3 height=1 bgcolor=#ffffff></td></tr>
 <tr><td colspan=10 class=blueheadcolor><center><input type=button onClick=Send('I') value='�������� ������� ������'  class=smalltext></td></tr>
</table>
</div>


<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 >
 <tr><td class=lmenutext height=30 bgcolor=#ffffff align="center">�������������� �����</td></tr>
</table>

<?php
 if(intval($err)<=-10) echo"<div class=smalltext align=center style='color:red;'>������ ��� ��������� ��������������. ��������� ����� ��� ������������ � �������</div>";
 if(intval($err)>=10) echo"<div class=smalltext align=center style='color:red;'>������ ��� �������� ��������������</div>";
 if(intval($err)==1) echo"<div class=smalltext align=center style='color:red;'>������ ��� ���������� ��������������. ��������� ����� ��� ������������ � �������</div>";
?>


<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0>
 <tr><td>
 <center>
 <table>
 <tr height=30 >
    <td><input type=button onClick=Send('U') value='�������� ����������' class=smalltext></td>
    <td width=5></td>
    <td><input type=button onClick=ConfirmSend('D') value='������� ����������'  class=smalltext></td>
 </tr>
 </table>
 </td></tr>
</table>


<table Border=0 CellSpacing=1 class=bluetable CellPadding=4 width=100%>
  <tr class=lmenutext height=20 align=center bgcolor=#ffffff>
    <td width=20>&nbsp;</td>
    <td><?=SortTitle("���","admin_name",$sortby,$sortdir);?></td>
    <td><?=SortTitle("�����","admin_login",$sortby,$sortdir);?></td>
    <td>������</td>
    <td><?=SortTitle("E-Mail","admin_email",$sortby,$sortdir);?></td>
    <td width="90"><?=SortTitle("����������","admin_active",$sortby,$sortdir);?></td>
    <td>�����</td>
  </tr>

<?php
$res=mysql_query ($mainquery) or die ("�� ���� ������� ���������������. ������ � �������.");
while(list($admin_code,$admin_name,$admin_login,$admin_email,$admin_active)=mysql_fetch_array($res))
           {
    if($admin_active) {$admin_active="��";$bg="#FFFFFF";} else {$admin_active="���";$bg="#EEEEEE";}
    $checkname=$admin_code;
    echo"<tr class=edittabletext height=24 bgcolor=$bg>";
    echo"<TD width=20 align=center ><input type='checkbox' name=\"C#$checkname\" id=\"C#$checkname\"></TD>";
    echo"<TD class=smalltext ondblclick='change_line(\"$checkname\",\"F#$checkname#admin_name#string\");' id=\"F#$checkname#admin_name#string\">".Show($admin_name)."</TD>\n";
    echo"<TD class=smalltext ondblclick='change_line(\"$checkname\",\"F#$checkname#admin_login#string\");' id=\"F#$checkname#admin_login#string\">".Show($admin_login)."</TD>\n";
    echo"<TD class=gray class=smalltext align=center  ondblclick='change_pass(\"$checkname\",\"F#$checkname#admin_pass#string\");' id=\"F#$checkname#admin_pass#string\"><i>�����������</i></TD>\n";
    echo"<TD class=smalltext ondblclick='change_line(\"$checkname\",\"F#$checkname#admin_email#string\");' id=\"F#$checkname#admin_email#string\">".Show($admin_email)."</TD>\n";
    echo"<TD class=smalltext align=center ondblclick='change_yes_no(\"$checkname\",\"F#$checkname#admin_active#int\");' id=\"F#$checkname#admin_active#int\">".Show($admin_active)."</TD>\n";
    echo"<td align=center ><a onclick=\"editperm($admin_code)\" class=\"hand\"><img height='24' width='24' src='graph/rights.gif' border=0 alt='���������� ����� �������' title='���������� ����� �������'></a></td>";
    echo"</TR>\n";
           } //end for x

?>

</table>

<table Border=0 CellSpacing=0 class=pagebluetable CellPadding=0 width=95%>
 <tr><td>
 <center>
 <table>
 <tr height=30 >
    <td><input type=button onClick=Send('U') value='�������� ����������' class=smalltext></td>
    <td width=5></td>
    <td><input type=button onClick=ConfirmSend('D') value='������� ����������'  class=smalltext></td>
 </tr>
 </table>
 </td></tr>
</table>

</form>
  </td>
  <td width=10></td>



</tr>


</table>
</div>
</center>

</BODY>
</HTML>
