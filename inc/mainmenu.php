    <!-- ������� ���� -->
    <!-- �������� ������ ���������� <b></b>, ��������� ������ ���������� <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'>�������</a></li></b></div>
         <div class=mitem><li><a href=''>� ��������</a></li></div>
         <div class=mitem><li><a href=''>�������</a></li></div>
         <div class=mitem><li><a href=''>������</a></li></div>
         <div class=mitem><li><a href=''>������������</a></li></div>
         <div class=mitem><li><a href=''>��������</a></li></div>
         <div class=mitem><span><li><a href=''>��������</a></li></span></div>
    </div>
    <!-- ����� �������� ���� -->

    <!-- ���� ������ -->
    <div class=langmenu>
        <a href='<?=$PHP_SELF?>?ln=<?=GetNextLang($LANG)?>'><div class=<?=GetNextLang($LANG)?>></div></a>  <!-- class=aen ��� �������� english -->
        <div class=<?=$lng?>></div>                       <!-- class=ru ��� �������� english -->
    </div>
    <!-- ����� ���� ������ -->

