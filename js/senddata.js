function isEmpty(str) {
   for (var i = 0; i < str.length; i++)
      if (" " != str.charAt(i))
          return false;
      return true;
}

function send()
{
 
var data = '�������� '+ $('#clientname').val()+' E-mail: '+
            $('#clientmail').val() + ' ������: '+$('#clientcountry').val()+
            '�������: '+ $('#clientphone').val()+ '�������� :'+$('#message').val();
  // �������� �������
       $.ajax({
                type: "POST",
                url: "senddata.php",
                data: "data="+data,
                // ������� �� ��� ������ PHP
                success: function(html) {
 //�������������� ������� ������ ������� ��������
                        $("#result").empty();
//� ������� ����� php �������
                        $("#result").append(html);
                }
        });

}
