    <!-- ������� ���� -->
    <!-- �������� ������ ���������� <b></b>, ��������� ������ ���������� <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'><?=Translate($LANG,'�������');?></a></li></b></div>
         <div class=mitem><li><a href='about.php'><?=Translate($LANG,'� ��������');?></a></li></div>
         <div class=mitem><li><a href='allnews.php'><?=Translate($LANG,'�������');?></a></li></div>
         <div class=mitem><li><a href='service.php'><?=Translate($LANG,'������');?></a></li></div>
         <div class=mitem><li><a href='equipment.php'><?=Translate($LANG,'������������');?></a></li></div>
         <div class=mitem><li><a href='partners.php'><?=Translate($LANG,'��������');?></a></li></div>
         <div class=mitem><span><li><a href='contacts.php'><?=Translate($LANG,'��������');?></a></li></span></div>
    </div>
    <!-- ����� �������� ���� -->

    <!-- ���� ������ -->
    <div class=langmenu>

        <a href='<?=$PHP_SELF?>?ln=en'><div class=<?=GetActiveLang("en")?>en></div> </a> <!-- class=aen ��� �������� english -->
        <a href='<?=$PHP_SELF?>?ln=ru'><div class=<?=GetActiveLang("ru")?>ru></div> </a> <!-- class=aen ��� �������� english -->
                            <!-- class=ru ��� �������� english -->
    </div>
    <!-- ����� ���� ������ -->

