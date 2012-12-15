<?php
include("inc/settings.php");

/*
$meta_title = ��������� �������� ���� �� ��������� �� �������
$meta_desc = ��������� �������� ���� �� ��������� �� �������
$meta_key = ��������� �������� ���� �� ��������� �� �������
*/
$menuindex=5;
$id=$_GET['id'];


$catalogstatic=getCatalogStatic($id, $LANG);
$meta_title=$catalogstatic['seo_title'];
$meta_desc=$catalogstatic['seo_desc'];
$meta_key=$catalogstatic['seo_key'];

$parentid=getParentId($id);
$parentstatic=getCatalogStatic($parentid,$LANG);

$praparentid=getParentId($parentid);
$praparentstatic=getCatalogStatic($praparentid,$LANG);


$opensub=true;
$opensubcode=$praparentid;



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
             <a href='<?=$mainurl;?>'><?=Translate($LANG,'�������� "������"');?> </a> 
              <span>/</span>  <a href='equipment.php'><?=Translate($LANG,'������������');?></a> <span>/</span> 
               <a href="catalog.php?id=<?=$praparentid?>"><?=$praparentstatic['name']?></a><span>/</span>
               <a href="models.php?id=<?=$parentid?>"><?=$parentstatic['name']?></a><span>/</span>
               <a><?=$catalogstatic['name']?></a>         
          </div>
          <!-- ����� ������� ������  -->

          <h1><?=$catalogstatic['name']?></h1>

          <div class=pnewstext>

            <div class=itemgallery>
                <?php ItemGallery($id,$LANG);?>
                <!--  
                <div class=itembpic id=ibp0><a href='images/item1.jpg' title='����������� � �����������' rel='lightbox[item]' target=_blank><img src="images/item1.jpg"  alt='����������� � �����������' border=0></a></div>
                <div class=itembpic id=ibp1 style='display:none;'><a href='images/item1-1.jpg' title='����������� � �����������' rel='lightbox[item]' target=_blank><img src="images/item1-1.jpg"  alt='����������� � �����������' border=0></a></div>
                <div class=itembpic id=ibp2 style='display:none;'><a href='images/item1-2.jpg' title='����������� � �����������' rel='lightbox[item]' target=_blank><img src="images/item1-2.jpg"  alt='����������� � �����������' border=0></a></div>
                <div class=itembpic id=ibp3 style='display:none;'><a href='images/item1-3.jpg' title='����������� � �����������' rel='lightbox[item]' target=_blank><img src="images/item1-3.jpg"  alt='����������� � �����������' border=0></a></div>

                <div class=roomiconlist>
                    <div class=roomiconarea>
                        <div class=itemicon onclick=showpic(0,4)><img src="images/item1.jpg" border=0></div>
                        <div class=itemicon onclick=showpic(1,4)><img src="images/item1-1.jpg" border=0></div>
                        <div class=itemicon onclick=showpic(2,4)><img src="images/item1-2.jpg" border=0></div>
                        <div class=itemicon onclick=showpic(3,4)><img src="images/item1-3.jpg" border=0></div>
                    </div>
                </div>  
                -->

            </div>


           <?=$catalogstatic['text']?>

            <div class=itemadd>
               <h3><?=Translate($LANG,'�������������� ����������'); ?>: </h3>
               <?php if ($catalogstatic['static_url'])
               	print "<div class=itemaddlink>".Translate($LANG,'������������')." ".$catalogstatic['name']."  :"; 
                print "<a href='".$catalogstatic['static_url']."' ".Translate($LANG,'�������')." (.pdf, 12��)</a></div>";
                if ($catalogstatic['page_url'])
                    print "<div class=itemaddlink>".Translate($LANG,'��������-���� �������������').": <a href='".$catalogstatic['page_url']."' target=_blank>".$catalogstatic['page_url']."</a></div>";
               ?>                            
            </div>

            <div class=pagenavigate>

             <div class=pnlinks>
                 
                 <?php  $previd=GetPrevEquip($id,$parentid);
                     if ($previd>0)
                     echo "<a href='item.php?id=$previd'>&laquo; ".Translate($LANG,'����������')." &raquo;</a>";
                     else echo Translate($LANG,'����������');
                 ?>
                 <span><a>|</a></span>
                 <?php  $nextid=GetNexEquip($id,$parentid);
                     if ($nextid>0)
                     echo "<a href='item.php?id=$nextid'>".Translate($LANG,'���������')." &raquo;</a>";
                     else echo Translate($LANG,'���������');
                 ?>
               </div>

               <div class=alllinks>
                 <a href="models.php?id=<?=$parentid?>"> <?=Translate($LANG,'��� ������������') ?> <?=$parentstatic['name']?></a>               
               </div>

            </div>


          </div><br/>

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
