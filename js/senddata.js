function isEmpty(str) {
    if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, ���� ���!");
     contform.clientname.focus();
     return  false;
   } else return true;
}

function send()
{
str  =  contform.clientname.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, ���� ���!");
     contform.clientname.focus();
     return  false;
   }
str  =  contform.clientmail.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, E-Mail!");
     contform.clientmail.focus();
     return  false;
   }
str  =  contform.clientcountry.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, ������!");
     contform.clientcountry.focus();
     return  false;
   }
str  =  contform.clientphone.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, �������!");
     contform.clientphone.focus();
     return  false;
   }
str  =  contform.message.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, ���������!");
     contform.message.focus();
     return  false;
   }

 
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
