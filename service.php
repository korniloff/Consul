<?php
include("inc/settings.php");
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
             <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?></a>  <span>/</span>  <a><?=Translate($LANG,'������');?></a>
          </div>
          <!-- ����� ������� ������  -->
<?php   $topstatic=getStatic('service',$LANG);
         echo" <h1>".$topstatic['name']."</h1>";
?>
          <div class=pnewstext>
               <? echo $topstatic['text']; ?>
          </div>

          <!-- ���� ������� ������������ �� ����� -->
          <div class=sertgallery>

            <?php GetGallery ('service',$LANG); ?>
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