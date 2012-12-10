<?php
include("inc/settings.php");
include ("inc/head.php");
//Branch GeorgeFront
?>


<body>

<div class=wrapper>

    <? include("inc/top.php");  ?>


    <div class=infoarea>

       <? include("inc/left.php"); ?>

      <!-- содержимое страницы -->
      <div class=rightpart>

          <!-- хлебные крошки -->
          <div class=krohi>
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'Добро пожаловать');?>!</a> -->
             <a href='<?=$mainurl;?>'>Компания "Консул"</a>  <span>/</span>  <a>Обрудование</a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1><?=Translate($LANG,'Оборудование');?></h1>

          <?
             include("inc/typecatalog.php");
          ?>

      </div>
      <!-- конец содержимого страницы -->


    </div>


    </td>
    <td class=rightbg>&nbsp;</td>
 </table>
<div>

<? include("inc/end.php"); ?>

</body>
</html>
