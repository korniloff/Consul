<?php
include("inc/settings.php");
$mainstatic=getStaticByCode(39,$LANG);
$meta_title=$mainstatic['seo_title'];
$meta_desc=$mainstatic['seo_desc'];
$meta_key=$mainstatic['seo_key'];
$menuindex=1;
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
             <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'����� ����������');?>!</a>
          </div>
          <!-- ����� ������� ������  -->

          <?
             include("inc/mainnews.php");
             include("inc/maincatalog.php");
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
