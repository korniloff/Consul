<?php
include("inc/settings.php");
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

      <!-- ���������� �������� -->
      <div class=rightpart>

          <!-- ������� ������ -->
          <div class=krohi>
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'����� ����������');?>!</a> -->
            <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?>
             </a>  <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'������������');?></a> <span>/</span>               
          </div>
          <!-- ����� ������� ������  -->

          <h1><?=Translate($LANG,'������������');?></h1>

          <?
             include("inc/typecatalog.php");
          ?>

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
