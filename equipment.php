<?php
include("inc/settings.php");
$mainstatic=getStaticByCode(39,$LANG);
$meta_title=$mainstatic['seo_title'];
$meta_desc=$mainstatic['seo_desc'];
$meta_key=$mainstatic['seo_key'];
$menuindex=5;
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
            
            <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?>
             </a>  <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'������������');?></a>          
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
