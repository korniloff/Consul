<?php
include("inc/settings.php");
$menuindex=6;
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
             </a>  <span>/</span>  <a><?=Translate($LANG,'��������');?></a>                       
          </div>
          <!-- ����� ������� ������  -->

          <h1><?=Translate($LANG,'��������');?></h1>

          <?
             include("inc/partnerpagelist.php");
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
