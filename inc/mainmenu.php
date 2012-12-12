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
        <?php
          if (count($_GET)) $tok='&'; else $tok='?';       
          $lastquest="http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'].$tok;          
        ?> 
        <a href='<?=$lastquest?>ln=en'><div class=<?=GetActiveLang("en")?>en></div> </a> <!-- class=aen при активном english -->
        <a href='<?=$lastquest?>ln=ru'><div class=<?=GetActiveLang("ru")?>ru></div> </a> <!-- class=aen при активном english -->
                            <!-- class=ru при активном english -->
    </div>
    <!-- конец меню языков -->

