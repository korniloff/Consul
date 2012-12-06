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

       <div class=slog></div>

    </div>
    <!-- конец текстов в шапке на синем фоне -->


    <div class=infoarea>

      <div class=leftpart>

         <!-- меню каталога -->
         <div class=catalogmenu>
            <h5>Каталог оборудования</h5>
            <ul>
               <li><a href="">Авторулевые</a></li>
               <li><a href="">АРБ, РЛО, УКВ-носимые</a></li>
               <li><a href="">Гирокомпасы</a>
                  <!-- подменю марок   -->
                  <!-- видимо если мы находимся на странице типа, марки или предмета данного типа -->

                  <ul>
                    <li><a href=''>Гирокомпас GC 80 Simrad</a></li>
                    <li><a href=''>Гирокомпас Standard 22 Raytheon</a></li>
                    <li><a href=''>Гирокомпас PGM-C-009</a></li>
                    <li><a href=''>Гирокомпас Меридиан</a></li>
                  </ul>

                  <!-- конец подменю марок   -->
               </li>
               <li><a href="">Картографические системы</a></li>
               <li><a href="">Командно-вещательные установки</a></li>
               <li><a href="">Компасы магнитные</a></li>
               <li><a href="">Приемники GPS, карт-плоттеры</a></li>
               <li><a href="">Приемники NAVTEX, приемники карт погоды</a></li>
               <li><a href="">ПВ/КВ, УКВ-радиостанции</a></li>
               <li><a href="">Радары</a></li>
               <li><a href="">Регистраторы данных рейса</a></li>
               <li><a href="">Спутниковые системы связи</a></li>
           </ul>
         </div>
         <div class=nomline></div>
         <!-- меню каталога -->



         <!-- контакты слева -->
         <div class=contactarea>
            <h5>Контактная информация</h5>
            <div class=addresstext>
                <b>ООО «ВЭК КОНСУЛ»</b><br>
                <p>
                    <b>Адрес:</b>
                     <br>99055. Украина, г. Севастополь
                     <br>ул. Генерала Острякова 4/21
                     <br><a href="">схема проезда »</a>
                </p>
                <p>
                    <b>Телефон:</b> +38 (0692) 65-76-85
                    <br><b>Факс:</b> +38 (0692) 44-82-378
                    <br><b>Мобильный:</b> +38 (050) 393-26-78
                </p>
                <p>
                    <b>E-mail:</b>  <a href="mailto:office@consul-marine.com.ua">office@consul-marine.com.ua</a>
                    <br><b>Skype:</b>  <a href="">consul-marine</a>
                </p>
            </div>
          </div>
         <!-- контакты слева -->

      </div>



      <!-- содержимое страницы -->
      <div class=rightpart>

          <!-- хлебные крошки -->

          <div class=krohi>
             <a>Добро пожаловать!</a>
          </div>

          <!-- конец хлебных крошек  -->


          <!-- топ новости -->
          <div class=mainnewsarea>
              <h5>Новости и события</h5>
              <!-- новость -->
              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='заголовок новости'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 г.</span>
                   <p>Компания Navico, мировой лидер по производству морской электроники, объявила о выходе новой линейки эхолотов и картплоттеров Lowrance серии Elite™ и серии Mark™.</p>
                 </div>
                 <div class=mnmore><a href=''>подробнее »</a></div>
              </div>
              <!-- конец новости -->

              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='заголовок новости'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 г.</span>
                   <p>Компания Navico, мировой лидер по производству морской электроники, объявила о выходе новой линейки эхолотов и картплоттеров Lowrance серии Elite™ и серии Mark™.</p>
                 </div>
                 <div class=mnmore><a href=''>подробнее »</a></div>
              </div>

              <div class=mnewsitem>
                 <center><div class=mnpic><a href=''><img src='images/news1.jpg' alt='заголовок новости'></a></div></center>
                 <div class=mnetstext>
                   <span>06.12.2012 г.</span>
                   <p>Компания Navico, мировой лидер по производству морской электроники, объявила о выходе новой линейки эхолотов и картплоттеров Lowrance серии Elite™ и серии Mark™.</p>
                 </div>
                 <div class=mnmore><a href=''>подробнее »</a></div>
              </div>


          </div>
          <!-- конец топ новостей -->



          <!-- каталог с иконками -->

          <div class=maincatalog>
               <h5>Обрудование</h5>

               <!-- элемент списка типов оборудования -->
               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/1.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>
               <!-- конец элемента списка типов оборудования -->

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/2.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/3.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/4.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>


               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/1.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/2.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/3.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/4.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/1.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/2.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/3.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/4.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/1.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/2.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/3.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>

               <div class=mсitem>
                 <div class=mсpic><a href=''><img src='images/4.jpg' alt='название раздела'></a></div>
                 <h2><a href="">название раздела</a></h2>
               </div>


          </div>
          <!-- конец каталога с иконками -->



      </div>
      <!-- конец содержимого страницы -->


    </div>
    </td>
    <td class=rightbg>&nbsp;</td>
 </table>
<div>

<div class=footerarea>

      <center>

      <!-- футер на синем фоне -->
      <div class=footer>

          <div class=endmenu><a href=''>главная</a>  / <a href=''>о компании</a>  / <a href=''>новости</a>  / <a href=''>услуги</a>  / <a href=''>оборудование</a>  / <a href=''>партнеры</a>   / <a href=''>контакты</a></div>
          <div class=copy><a href=''>&copy; 2012. ООО «ВЭК КОНСУЛ» </a></div>

          <div class=counters>
<!--LiveInternet counter--><script type="text/javascript"><!--
document.write("<a href='http://www.liveinternet.ru/click' "+
"target=_blank><img src='//counter.yadro.ru/hit?t39.3;r"+
escape(document.referrer)+((typeof(screen)=="undefined")?"":
";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?
screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+
";h"+escape(document.title.substring(0,80))+";"+Math.random()+
"' alt='' title='LiveInternet' "+
"border='0' width='31' height='31'><\/a>")
//--></script><!--/LiveInternet-->
          </div>

      </div>
      <!-- конец футера на синем фоне -->


      <!-- ТОП партнеров -->
      <div class=toppartners>
       <center>
       <div class=tparea>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='название брэнда' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='название брэнда' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='название брэнда' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='название брэнда' border=0></a></div>
        <div class=tpitem><a href='' traget=_blank><img src='images/logo1.png' alt='название брэнда' border=0></a></div>
       </div>
       </center>
      </div>



      </center>


</div>


</body>
</html>
