<?php
include("inc/settings.php");

/*
$meta_title = ��������� ������� ���� �� ��������� �� �������
$meta_desc = ��������� ������� ���� �� ��������� �� �������
$meta_key = ��������� �������, ������������ �����������, ����� �������, ���� �� ��������� �� �������
*/
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
             <a href='<?=$mainurl;?>'>�������� "������"</a>  <span>/</span>  <a href='equipment.php'>�����������</a> <span>/</span>  <a>������������ �������</a>
          </div>
          <!-- ����� ������� ������  -->

          <h1>������������ �������</h1>

          <div class=pnewstext>
            ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������.  ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������. ����� �������� ���� ������ � ������.
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
