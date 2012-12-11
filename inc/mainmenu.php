    <!-- главное меню -->
    <!-- активный раздел выделяется <b></b>, последний раздел выделяется <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'><?=Translate($LANG,'Главная');?></a></li></b></div>
         <div class=mitem><li><a href='about.php'><?=Translate($LANG,'O компании');?></a></li></div>
         <div class=mitem><li><a href='allnews.php'><?=Translate($LANG,'Новости');?></a></li></div>
         <div class=mitem><li><a href='service.php'><?=Translate($LANG,'Услуги');?></a></li></div>
         <div class=mitem><li><a href='equipment.php'><?=Translate($LANG,'Оборудование');?></a></li></div>
         <div class=mitem><li><a href='partners.php'><?=Translate($LANG,'Партнеры');?></a></li></div>
         <div class=mitem><span><li><a href='contacts.php'><?=Translate($LANG,'Контакты');?></a></li></span></div>
    </div>
    <!-- конец главного меню -->

    <!-- меню языков -->
    <div class=langmenu>

        <a href='<?=$PHP_SELF?>?ln=en'><div class=<?=GetActiveLang("en")?>en></div> </a> <!-- class=aen при активном english -->
        <a href='<?=$PHP_SELF?>?ln=ru'><div class=<?=GetActiveLang("ru")?>ru></div> </a> <!-- class=aen при активном english -->
                            <!-- class=ru при активном english -->
    </div>
    <!-- конец меню языков -->

