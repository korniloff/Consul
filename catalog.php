<?php
include("inc/settings.php");

/*
$meta_title = ��������� ������� ���� �� ��������� �� �������
$meta_desc = ��������� ������� ���� �� ��������� �� �������
$meta_key = ��������� �������, ������������ �����������, ����� �������, ���� �� ��������� �� �������
*/
$id=$_GET['id'];
$opensub=($id>0);
$opensubcode=$id;

$catalogstatic=getCatalogStatic($id, $LANG);
$meta_title=$catalogstatic['seo_title'];
$meta_desc=$catalogstatic['seo_desc'];
$meta_key=$catalogstatic['seo_key'];
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
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'����� ����������');?>!</a> -->
            <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?> 
            </a>  <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'������������');?></a> <span>/</span> <a><?=$catalogstatic['name']?></a>
          </div>
          <!-- ����� ������� ������  -->

          <h1><?=$catalogstatic['name']?></h1>

          <div class=pnewstext>
            <?=$catalogstatic['text']?>
          </div><br/>

          <?
             include("inc/subtypecatalog.php");
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
