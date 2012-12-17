
<td class=leftpanel>

<table CellSpacing=0 CellPadding=0>
<tr><td class=bluehead><h4>Навигация</h4><td></tr>
<tr><td class=blueblock>
<div style="margin-left:20px">

<?php

if( isAllowed("radmin")||isAllowed(rtext))
{
echo"<p><div class=lmenupart><b>Администрирование</b></div>";
if( isAllowed("radmin"))
		echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"admin.php\">Управление доступом</a></b></div>";
if( isAllowed("rtext"))
  {	
    echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"dict.php\">Словарь</a></b></div>";
    echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"textpage.php\">Текстовые страницы</a></b></div>";
  }
//    if (isAllowed("radmin")) echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"statlist.php\">Текстовые страницы</a></b></div>";
//    if (isAllowed("radmin")) echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"mappoints.php\">Карта</a></b></div>";
}
        

if(isAllowed(("rnews")) || (isAllowed("requipment")) || (isAllowed("rpartner")))
{
	echo "<br><p><div class=lmenupart><b>Деятельность</b></div>";
	if (isAllowed("rnews")) echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"newspage.php\"> Новости </a></b></div>";
	if (isAllowed("requipment")) echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"catalogpage.php\">Оборудование</a></b></div>";
	if (isAllowed("rpartner")) echo"<div class=lmenupart>&#187;&nbsp; <b><a href=\"partnerpage.php\">Партнеры</a></b></div>";
}
 
if (strstr($_SERVER['PHP_SELF'],"catalogpage.php"))
{	
 echo "<p><div class=lmenupart><b>Оборудование</b></div>";
 echo "<div class='jquery-tree'>";
view_tree(1);
echo "</div>";
}		
?>



</div>
<br>






<td></tr>
</table>
&nbsp;


  <td>

