function isEmpty(str) {
   for (var i = 0; i < str.length; i++)
      if (" " != str.charAt(i))
          return false;
      return true;
}

function send()
{
 
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
