<?php
$menuindex=5;
include("inc/settings.php");

$id=$_GET['id'];


$catalogstatic=getCatalogStatic($id, $LANG);
$meta_title=$catalogstatic['seo_title'];
$meta_desc=$catalogstatic['seo_desc'];
$meta_key=$catalogstatic['seo_key'];


include ("inc/head.php");
$parentid=getParentId($id);
$parentstatic=getCatalogStatic($parentid,$LANG);
$opensub=true;
$opensubcode=$parentid;
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
              </a>  <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'������������');?></a> <span>/</span> <a href="catalog.php?id=<?=$parentid?>"><?=$parentstatic['name']?></a><span>/</span><a><?=$catalogstatic['name']?></a>
             
          </div>
          <!-- ����� ������� ������  -->

          <h1><?=$catalogstatic['name']?></h1>

          <div class=pnewstext>
            <?=$catalogstatic['text']?>
          </div><br/>

          <?
             include("inc/modellist.php");
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
