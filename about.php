<?php
include("inc/settings.php");
$aboutstatic=getStatic('about us',$LANG);
$meta_title=$aboutstatic['seo_title'];
$meta_desc=$aboutstatic['seo_desc'];
$meta_key=$aboutstatic['seo_key'];
$menuindex=2;
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

      <!-- ���������� �������� -->
      <div class=rightpart>

          <!-- ������� ������ -->
          <div class=krohi>
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'����� ����������');?>!</a> -->
             <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?></a>  <span>/</span>  <a><?=Translate($LANG,'O ��������');?></a>
          </div>
          <!-- ����� ������� ������  -->
<?php
         echo" <h1>".$aboutstatic['name']."</h1>";
?>
          <div class=pnewstext>
               <? echo $aboutstatic['text']; ?>
          </div>


          <!-- ���� ������� ������������ �� ����� -->
          <div class=sertgallery>
			 <?php PrintGallery ('about us',$LANG,'sertgalleryitem','sgpic'); ?>
          </div>
          <!-- ����� ������� -->



      </div>
      <!-- ����� ����������� �������� -->


    </div>


    </td>
    <td class=rightbg>&nbsp;</td>
 </table>
<div>

<? include("inc/end.php"); ?>

</body>
</html>
