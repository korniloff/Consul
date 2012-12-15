<?php
include("inc/settings.php");

/*
$meta_title = заголовок новости если не перекрыта на статике
$meta_desc = аннотаци€ новости если не перекрыта на статике
$meta_key = заголовок новости если не перекрыта на статике
*/
$newsid=$_GET['id'];
$newsitem=getnewsbyid($LANG,$newsid);
$menuindex=3;
list($news_date,$news_name,$news_abstract,$news_text,$meta_title,$meta_desc,$meta_key,$pagecode,$pagename)=$newsitem;
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
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'ƒобро пожаловать');?>!</a> -->
             <a href='<?=$mainurl;?>'><?=Translate($LANG,' омпани€ " онсул"');?>
             </a>  <span>/</span>  <a href='allnews.php'><?=Translate($LANG,'Ќовости');?></a> <span>/</span>  
             <a><?=$news_name ?></a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1><?=$news_name ?></h1>
          <div class=pnewstext>

            <p>
               <?=$news_text ?>
            </p>


          <!-- если у новости есть галере€ -->
          <div class=gallery>
			 <?php PrintGallery ($pagename,$LANG,'galleryitem','gpic'); ?>
           </div>
          <!-- конец галереи -->

          <!-- навигаци€ по страницам -->
            <div class=pagenavigate>

             <div class=pnlinks>
                 <a href="">&laquo; предыдуща€</a>
                 <span><a>|</a></span>
                 <a href="">следующа€ &raquo;</a>
               </div>

               <div class=alllinks>
                 <a href="">¬се новости</a>
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
