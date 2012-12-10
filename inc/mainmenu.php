    <!-- главное меню -->
    <!-- активный раздел выделяется <b></b>, последний раздел выделяется <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'><?=Translate($LANG,'главная');?></a></li></b></div>
         <div class=mitem><li><a href='about.php'><?=Translate($LANG,'о компании');?></a></li></div>
         <div class=mitem><li><a href='allnews.php'><?=Translate($LANG,'новости');?></a></li></div>
         <div class=mitem><li><a href='service.php'><?=Translate($LANG,'услуги');?></a></li></div>
         <div class=mitem><li><a href='equipment.php'><?=Translate($LANG,'оборудование');?></a></li></div>
         <div class=mitem><li><a href='partners.php'><?=Translate($LANG,'партнеры');?></a></li></div>
         <div class=mitem><span><li><a href='contacts.php'><?=Translate($LANG,'контакты');?></a></li></span></div>
    </div>
    <!-- конец главного меню -->

    <!-- меню языков -->
    <div class=langmenu>

        <a href='<?=$PHP_SELF?>?ln=en'><div class=<?=GetActiveLang("en")?>en></div> </a> <!-- class=aen при активном english -->
        <a href='<?=$PHP_SELF?>?ln=ru'><div class=<?=GetActiveLang("ru")?>ru></div> </a> <!-- class=aen при активном english -->
                            <!-- class=ru при активном english -->
    </div>
    <!-- конец меню языков -->

