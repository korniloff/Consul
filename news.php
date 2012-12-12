<?php
include("inc/settings.php");

/*
$meta_title = заголовок новости если не перекрыта на статике
$meta_desc = аннотация новости если не перекрыта на статике
$meta_key = заголовок новости если не перекрыта на статике
*/
$newsid=$_GET['id'];
$newsitem=getnewsbyid($LANG,$newsid);
list($news_date,$news_name,$news_abstract,$news_text,$meta_title,$meta_desc,$meta_desc,$meta_key,$pagecode)=$newsitem;
include ("inc/head.php");
//Branch GeorgeFront
?>

<script src="js/jquery-1.7.2.min.js"></script>
<script src="js/lightbox.js"></script>


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
             <a href='<?=$mainurl;?>'><?=Translate($LANG,'Компания "Консул"');?>
             </a>  <span>/</span>  <a href='allnews.php'><?=Translate($LANG,'Новости');?></a> <span>/</span>  
             <a><?=$news_name ?></a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1><?=$news_name ?></h1>
          <div class=pnewstext>

            <p>
               <?=$news_text ?>
            </p>


          <!-- если у новости есть галерея -->
          <div class=gallery>

             <div class=galleryitem>
                <!-- news_big.jpg - значение поля picbig -->
                <div class=gpic><a href='images/news_big.jpg' title='Комментарий к изображению' rel='lightbox[news]' target=_blank><img src='images/news_big.jpg' alt='Комментарий к изображению' border=0></a></div>
             </div>

             <div class=galleryitem>
                <!-- news_big.jpg - значение поля picbig -->
                <div class=gpic><a href='images/news_big.jpg' title='Комментарий к изображению' rel='lightbox[news]' target=_blank><img src='images/news_big.jpg' alt='Комментарий к изображению' border=0></a></div>
             </div>

             <div class=galleryitem>
                <!-- news_big.jpg - значение поля picbig -->
                <div class=gpic><a href='images/news_big.jpg' title='Комментарий к изображению' rel='lightbox[news]' target=_blank><img src='images/news_big.jpg' alt='Комментарий к изображению' border=0></a></div>
             </div>

             <div class=galleryitem>
                <!-- news_big.jpg - значение поля picbig -->
                <div class=gpic><a href='images/news_big.jpg' title='Комментарий к изображению' rel='lightbox[news]' target=_blank><img src='images/news_big.jpg' alt='Комментарий к изображению' border=0></a></div>
             </div>

          </div>
          <!-- конец галереи -->

          <!-- навигация по страницам -->
            <div class=pagenavigate>

             <div class=pnlinks>
                 <a href="">&laquo; предыдущая</a>
                 <span><a>|</a></span>
                 <a href="">следующая &raquo;</a>
               </div>

               <div class=alllinks>
                 <a href="">Все новости</a>
               </div>

            </div>
          <!-- конец навигации по страницам -->


         </div>


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
