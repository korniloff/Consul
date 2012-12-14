<?php
include("inc/settings.php");

/*
$meta_title = заголовок раздела если не перекрыта на статике
$meta_desc = аннотация раздела если не перекрыта на статике
$meta_key = заголовок раздела, перечисление подразделов, через запятую, если не перекрыта на статике
*/
$id=$_GET['id'];
$opensub=($id>0);
$opensubcode=$id;

$catalogstatic=getCatalogStatic($id, $LANG);
$meta_title=$catalogstatic['seo_title'];
$meta_desc=$catalogstatic['seo_desc'];
$meta_key=$catalogstatic['seo_key'];

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
            </a>  <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'Оборудование');?></a> <span>/</span> <a><?=$catalogstatic['name']?></a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1><?=$catalogstatic['name']?></h1>

          <div class=pnewstext>
            <?=$catalogstatic['text']?>
          </div><br/>

          <?
             include("inc/subtypecatalog.php");
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
