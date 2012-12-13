<?php
include("inc/settings.php");

/*
$meta_title = заголовок раздела если не перекрыта на статике
$meta_desc = аннотация раздела если не перекрыта на статике
$meta_key = заголовок раздела, перечисление подразделов, через запятую, если не перекрыта на статике
*/
$mainstatic=getStatic('main',$LANG);
$meta_title=$mainstatic['seo_title'];
$meta_desc=$mainstatic['seo_desc'];
$meta_key=$mainstatic['seo_key'];
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
             <a href='<?=$mainurl;?>'>Компания "Консул"</a>  <span>/</span>  <a href='equipment.php'>Обрудование</a> <span>/</span>  <a>Наименование раздела</a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1>Наименование раздела</h1>

          <div class=pnewstext>
            Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе.  Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе. Текст страницы если введен в админе.
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
