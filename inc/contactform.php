<?

   // если после удачной отправки
   if ($ok==1) $contactform="<div class=cform><center> <h2>".Translate($LANG,'Сообщение успешно отправлено').
                            "!</h2> <p>".
                            Translate($LANG,'Благодарим за интерес к нашим предложениям').
                            "!</p></center></div>";

   // если по ссылке
   else  $contactform="<div class=cform>  <center> <h2>".Translate($LANG,'Отправить сообщение').
                      "</h2></center>  <form name=contform action='smessage.php' method=POST>
                       <input type=hidden name=mes value=12>  <p>".Translate($LANG,'Ваше имя').
                       ":<br><input name=clientname></p>
      <p>E-mail:<br><input name=clientmail></p> <p>".Translate($LANG,'Страна').
      ":<br><input name=clientcountry></p> <p>".Translate($LANG,'Телефон').
      ":<br><input name=clientphone></p> <p>".Translate($LANG,'Сообщение').
      ":<br><textarea name=message rows=6></textarea></p>
        </form>
        <p>
        <center><div class=cfinfo>".Translate($LANG,'необходимо заполнить все поля формы').
        "</div>  <div class=bbc onclick='".iiii.
        "'><h6>". Translate($LANG,'Отправить сообщение').
        "</h6></div></center> </p> </div>  ";

   echo"$contactform";

?>

