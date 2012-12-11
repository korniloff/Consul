<?php
include("inc/settings.php");
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

      <!-- содержимое страницы -->
      <div class=rightpart>

          <!-- хлебные крошки -->
          <div class=krohi>
             <!-- <a href=<?=$PHP_SELF?>> <?=Translate($LANG,'Добро пожаловать');?>!</a> -->
             <a href='<?=$mainurl;?>'>Компания "Консул"</a>  <span>/</span>  <a>Контактная информация</a>
          </div>
          <!-- конец хлебных крошек  -->

          <h1>Заголовок страницы</h1>
          <div class=pnewstext>

             <? include("inc/contactform.php");  ?>

<p>ООО «ВЭК КОНСУЛ»</p>
Адрес:
<br>99055. Украина, г. Севастополь
<br>ул. Генерала Острякова 4/21
<p>
Телефон: +38 (0692) 65-76-85
<br>Факс: +38 (0692) 44-82-378
<br>Мобильный: +38 (050) 393-26-78
</p>
<p>
E-mail: <a href="office@consul-marine.com.ua">office@consul-marine.com.ua</a>
<br>Skype: <a href="consul-marine">consul-marine</a>
</p>


          </div>

          <div class=map>
<div id="ymaps-map-id_135523492424244112816" style="width: 655px; height: 370px;"></div>
<div style="width: 450px; text-align: right;"><a href="http://api.yandex.ru/maps/tools/constructor/index.xml" target="_blank" style="color: #1A3DC1; font: 13px Arial, Helvetica, sans-serif;"></a></div>
<script type="text/javascript">function fid_135523492424244112816(ymaps) {var map = new ymaps.Map("ymaps-map-id_135523492424244112816", {center: [33.526051999999964, 44.56737370423955], zoom: 16, type: "yandex#map"});map.controls.add("zoomControl").add("mapTools").add(new ymaps.control.TypeSelector(["yandex#map", "yandex#satellite", "yandex#hybrid", "yandex#publicMap"]));map.geoObjects.add(new ymaps.Placemark([33.526052, 44.566484], {balloonContent: "ООО ВЭК Консул"}, {preset: "twirl#lightblueDotIcon"}));};</script>
<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?lang=ru-RU&coordorder=longlat&load=package.full&wizard=constructor&onload=fid_135523492424244112816"></script>
          </div>



      </div>
      <!-- конец содержимого страницы -->


    </div>


    </td>
    <td class=rightbg>&nbsp;</td>
 </table>
<div>

<? include("inc/end.php"); ?>

</body>
</html>
