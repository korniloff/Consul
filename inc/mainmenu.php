    <!-- ������� ���� -->
    <!-- �������� ������ ���������� <b></b>, ��������� ������ ���������� <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'><?=Translate($LANG,'�������');?></a></li></b></div>
         <div class=mitem><li><a href='about.php'><?=Translate($LANG,'O ��������');?></a></li></div>
         <div class=mitem><li><a href='allnews.php'><?=Translate($LANG,'�������');?></a></li></div>
         <div class=mitem><li><a href='service.php'><?=Translate($LANG,'������');?></a></li></div>
         <div class=mitem><li><a href='equipment.php'><?=Translate($LANG,'������������');?></a></li></div>
         <div class=mitem><li><a href='partners.php'><?=Translate($LANG,'��������');?></a></li></div>
         <div class=mitem><span><li><a href='contacts.php'><?=Translate($LANG,'��������');?></a></li></span></div>
    </div>
    <!-- ����� �������� ���� -->

    <!-- ���� ������ -->
    <div class=langmenu>
        <?php
          if (count($_GET)) $tok='&'; else $tok='?';       
          $lastquest="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].$tok;          
        ?> 
        <a href='<?=$lastquest?>ln=en'><div class=<?=GetActiveLang("en")?>en></div> </a> <!-- class=aen ��� �������� english -->
        <a href='<?=$lastquest?>ln=ru'><div class=<?=GetActiveLang("ru")?>ru></div> </a> <!-- class=aen ��� �������� english -->
                            <!-- class=ru ��� �������� english -->
    </div>
    <!-- ����� ���� ������ -->

