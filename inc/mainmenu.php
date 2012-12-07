    <!-- главное меню -->
    <!-- активный раздел выделяется <b></b>, последний раздел выделяется <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href='<?=$mainurl;?>'>главная</a></li></b></div>
         <div class=mitem><li><a href=''>о компании</a></li></div>
         <div class=mitem><li><a href=''>новости</a></li></div>
         <div class=mitem><li><a href=''>услуги</a></li></div>
         <div class=mitem><li><a href=''>оборудование</a></li></div>
         <div class=mitem><li><a href=''>партнеры</a></li></div>
         <div class=mitem><span><li><a href=''>контакты</a></li></span></div>
    </div>
    <!-- конец главного меню -->

    <!-- меню языков -->
    <div class=langmenu>
        <a href='<?=$PHP_SELF?>?ln=<?=GetNextLang($LANG)?>'><div class=<?=GetNextLang($LANG)?>></div></a>  <!-- class=aen при активном english -->
        <div class=<?=$lng?>></div>                       <!-- class=ru при активном english -->
    </div>
    <!-- конец меню языков -->

