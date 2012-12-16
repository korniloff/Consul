<script language = JavaScript>
function send()
{
str  =  contform.clientname.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'Введите, пожалуйста, Ваше имя');?>!");
     contform.clientname.focus();
     return  false;
   }
str  =  contform.clientmail.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'Введите, пожалуйста, E-Mail');?>!");
     contform.clientmail.focus();
     return  false;
   }
str  =  contform.clientcountry.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'Введите, пожалуйста, страну');?>!");
     contform.clientcountry.focus();
     return  false;
   }
str  =  contform.clientphone.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'Введите, пожалуйста, телефон!');?>");
     contform.clientphone.focus();
     return  false;
   }
str  =  contform.message.value;
   if (encodeURI(str).length  <  1)
   {
     alert("Введите, пожалуйста, сообщение!');?>");
     contform.message.focus();
     return  false;
   }

 
var data = 'Господин '+ $('#clientname').val()+' E-mail: '+
            $('#clientmail').val() + ' Страна: '+$('#clientcountry').val()+
            'Телефон: '+ $('#clientphone').val()+ 'Сообщает :'+$('#message').val();
  // Отсылаем паметры
       $.ajax({
                type: "POST",
                url: "senddata.php",
                data: "data="+data,
                // Выводим то что вернул PHP
                success: function(html) {
 //предварительно очищаем нужный элемент страницы
                        $("#result").empty();
//и выводим ответ php скрипта
                        $("#result").append(html);
                }
        });

}
</script>

  <div class=cform id="result">
            <center> <h2> <?=Translate($LANG,'Отправить сообщение')?>.
            </h2></center>
            <form name=contform action='smessage.php' method=POST>
              <input type=hidden name=mes value=12>
              <p> <?=Translate($LANG,'Ваше имя');?>:<br><input name=clientname></p>
              <p>E-mail:<br><input name=clientmail></p>
              <p><?=Translate($LANG,'Страна');?>:<br><input name=clientcountry></p>
              <p><?=Translate($LANG,'Телефон');?>:<br><input name=clientphone></p>
              <p><?=Translate($LANG,'Сообщение');?>:<br>
              <textarea name=message rows=6></textarea></p>		  
            
        <p>
        <center><div class=cfinfo > <?=Translate($LANG,'необходимо заполнить все поля формы')?> </div>
        <div class=bbc onclick="send();">
        <h6> <?=Translate($LANG,'Отправить сообщение')?></h6>
        </div>
		</form>
        </center>
        </p>
  </div>



