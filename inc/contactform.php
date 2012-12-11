<?

   // если после удачной отправки
   if ($ok==1) $contactform="<div class=cform><center> <h2>Сообщение успешно отправлено!</h2><p>Благодарим за интерес к нашим предложениям!</p></center></div>";

   // если по ссылке
   else  $contactform="
   <div class=cform>
   <center> <h2>Отправить сообщение</h2></center>
   <form name=contform action='smessage.php' method=POST>
      <input type=hidden name=mes value=12>
      <p>Ваше имя:<br><input name=clientname></p>
      <p>E-mail:<br><input name=clientmail></p>
      <p>Страна:<br><input name=clientcountry></p>
      <p>Телефон:<br><input name=clientphone></p>
      <p>Сообщение:<br><textarea name=message rows=6></textarea></p>
    </form>
    <p>
        <center><div class=cfinfo>необходимо заполнить все поля формы</div>
        <div class=bbc onclick='отправить форму'><h6>отправить сообщение</h6></div></center>
    </p>
   </div>
   ";

   echo"$contactform";

?>

