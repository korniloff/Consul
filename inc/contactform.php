<script language = JavaScript>
function send()
{
str  =  contform.clientname.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, ���� ���');?>!");
     contform.clientname.focus();
     return  false;
   }
str  =  contform.clientmail.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, E-Mail');?>!");
     contform.clientmail.focus();
     return  false;
   }
str  =  contform.clientcountry.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, ������');?>!");
     contform.clientcountry.focus();
     return  false;
   }
str  =  contform.clientphone.value;
   if (encodeURI(str).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, �������!');?>");
     contform.clientphone.focus();
     return  false;
   }
str  =  contform.message.value;
   if (encodeURI(str).length  <  1)
   {
     alert("�������, ����������, ���������!');?>");
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
</script>

  <div class=cform id="result">
            <center> <h2> <?=Translate($LANG,'��������� ���������')?>.
            </h2></center>
            <form name=contform action='smessage.php' method=POST>
              <input type=hidden name=mes value=12>
              <p> <?=Translate($LANG,'���� ���');?>:<br><input name=clientname></p>
              <p>E-mail:<br><input name=clientmail></p>
              <p><?=Translate($LANG,'������');?>:<br><input name=clientcountry></p>
              <p><?=Translate($LANG,'�������');?>:<br><input name=clientphone></p>
              <p><?=Translate($LANG,'���������');?>:<br>
              <textarea name=message rows=6></textarea></p>		  
            
        <p>
        <center><div class=cfinfo > <?=Translate($LANG,'���������� ��������� ��� ���� �����')?> </div>
        <div class=bbc onclick="send();">
        <h6> <?=Translate($LANG,'��������� ���������')?></h6>
        </div>
		</form>
        </center>
        </p>
  </div>



