<?php
include("inc/settings.php");
include ("inc/head.php");
?>


<body>

<div class=wrapper>
<table Border=0 CellSpacing=0 CellPadding=0 class=wrtable>
 <tr valign=top>
    <td class=leftbg>&nbsp;</td>
    <td class=page>

    <!-- главное меню -->
    <!-- активный раздел выделяется <b></b>, последний раздел выделяется <span></span> -->
    <div class=topmenu>
         <div class=mitem><b><li><a href=''>главная</a></li></b></div>
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
        <a href='?ln=ru'><div class=en></div></a>  <!-- class=aen при активном english -->
        <div class=aru></div>                       <!-- class=ru при активном english -->
    </div>
    <!-- конец меню языков -->

    <div class=logoarea>

        <!-- логотип:  class=logo_en для english -->
        <div class=logo><a href=''></a></div>

        <!-- форма поиска -->
        <div class=search>
            <form name=searchform action='' method=POST>
                <input name=word>
                <div class=go onclick='document.searchform.submit()'></div>
            </form>
        </div>
        <!-- конец формы поиска -->

    </div>

    <!-- тексты в шапке на синем фоне -->
    <div class=toptextarea>

       <div class=topabout>
         <!-- текст приветствия должен выводиься из базы (отдельная страница статики) -->
         Компания КОНСУЛ была основано в 2001 году.  Деятельность компании основана на использовании новейших технологий  в области радиоэлектроники, передовых научных  достижений  и  богатого  опыта наших специалистов. Наша философия заключается в гибком  подходе к  потребностям наших клиентов, высокой  ответственности   и  профессионализме  в развитии проектов.  Мы дорожим репутацией нашей компании как надежного партнера!
       </div>


    </div>
    <!-- конец текстов в шапке на синем фоне -->





      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </td>

    <td class=rightbg>&nbsp;</td>
 </table>
<div>

</body>
</html>
