<?php
include("inc/settings.php");
include ("inc/head.php");
$_SESSION["pageback"]="main.php";
?>

<BODY>
<center>

<div class=mainbody>

<? include("inc/top.php");?>

<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
  <tr><td class=pageline>
     <div class=wmiddletext><a href="main.php">����������������� �����</a> </div>
  </td></tr>
</table>
&nbsp;

<table Border=0 CellSpacing=0 CellPadding=0 width=100%>
 <tr valign=top>

  <td width=10></td>
  <? include("inc/leftmenu.php"); ?>
  <td width=10></td>

  <td>


<table Border=0 CellSpacing=0 CellPadding=0 Width=100%>
 <tr align=cener valign=top>
     <td width=48%>

<?
if( (isAllowed("radmin")) )
{
echo"
<table class=grayhead Border=0 CellSpacing=0 CellPadding=0>
 <tr colspan=10 class=normaltext><td ><div ><h4>�����������������</h4></div></td></tr>
</table>
<table Border=0 CellSpacing=15 CellPadding=0>
 <tr class=middletext align=center valign=top>";
     if (isAllowed("radmin")) echo"<td><a href=\"admin.php\"><img hspace=20 b src=\"graph/newicon/admin.png\"  border=0><p class=\"space\">����������<br>��������</a></td>";
     if (isAllowed("rtext"))
        {
          echo"<td><a href=\"dict.php\"><img src=\"graph/newicon/lang.png\"  hspace=20 border=0><p class=\"space\">�������</a></td>";
          echo"<td><a href=\"textpage.php\"><img src=\"graph/newicon/page.png\"  hspace=20 b border=0><p class=\"space\">���������<br>��������</a></td>";
        }
echo"
 </tr>
</table>
&nbsp;";
}

if(isAllowed(("rnews")) || (isAllowed("requipment")) || (isAllowed("rpartner")))
{
    echo"
<table class=grayhead Border=0 CellSpacing=0 CellPadding=0>
 <tr colspan=10 class=normaltext><td ><div ><h4>������������</h4></div></td></tr>
</table>
<table Border=0 CellSpacing=15 CellPadding=0>
 <tr class=middletext align=center valign=top>";

if (isAllowed("rnews")) echo"<td><a href=\"newspage.php\"><img src=\"graph/newicon/news.png\" hspace=20 border=0><p class=\"space\">�������</a></td>";
if (isAllowed("requipment")) echo"<td ><a href=\"catalogpage.php\"><img src=\"graph/icon/equipment.gif\"  hspace=20 border=0><p class=\"space\">������������</a></td>";
if (isAllowed("rpartner")) echo"<td ><a href=\"partnerpage.php\"><img src=\"graph/newicon/rooms.png\"  hspace=20 border=0><p class=\"space\">��������</a></td>";

echo"
 </tr>
</table>
</center>
";

}


?>




     </td>

     <td width=4%>&nbsp;</td>

     <td width=48%>

<!--


<?

if (isAllowed("rdirectory"))
{
    echo"
<center>
<table class=grayhead Border=0 CellSpacing=0 CellPadding=0>
 <tr colspan=10 class=normaltext><td ><div ><h4>�����������</h4></div></td></tr>
</table>
<table Border=0 CellSpacing=15 CellPadding=0>
 <tr class=middletext align=center valign=top>
    <td ><a href='types.php'><img src='graph/icon/partners.gif'  border=0><p class=space>����������</a></td><td>&nbsp;</td>
    <td ><a href='country.php'><img src='graph/icon/bottom.gif'  border=0><p class=space>������</a></td><td>&nbsp;</td>
    <td ><a href='factory.php'><img src='graph/icon/city.gif'  border=0><p class=space>������</a></td>

 </tr><tr class=middletext align=center valign=top>
    <td ><a href='styles.php'><img src='graph/icon/adv.gif'  border=0><p class=space>�����</a></td><td>&nbsp;</td>
    <td ><a href='colors.php'><img src='graph/icon/dep.gif'  border=0><p class=space>�����</a></td><td>&nbsp;</td>
    <td ><a href='materials.php'><img src='graph/icon/files.gif'  border=0><p class=space>���������</a></td>

 </tr><tr class=middletext align=center valign=top>
    <td ><a href='surfaces.php'><img src='graph/icon/artmain.gif'  border=0><p class=space>���� �����������</a></td><td>&nbsp;</td>
    <td ><a href='status.php'><img src='graph/icon/sminews.jpg'  border=0><p class=space>������� ���������</a></td><td>&nbsp;</td>
    <td ><a href='pricegroups.php'><img src='graph/icon/smiinfo.gif'  border=0><p class=space>������� ������</a></td>
 </tr>
</table>
</center>
";

}
?>


-->

     </td>
 </tr>
</table>






  </td>
  <td width=10></td>



</tr>

</table>
</div>
</center>

</BODY>
</HTML>
