<script language = JavaScript>
function send()
{
var strName  =  contform.clientname.value;
   if (encodeURI(strName).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, ���� ���');?>!");
     contform.clientname.focus();
     return  false;
   }
var strMail  =  contform.clientmail.value;
   if (encodeURI(strMail).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, E-Mail');?>!");
     contform.clientmail.focus();
     return  false;
   }
var strCountry  =  contform.clientcountry.value;
   if (encodeURI(strCountry).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, ������');?>!");
     contform.clientcountry.focus();
     return  false;
   }
var strPhone  =  contform.clientphone.value;
   if (encodeURI(strPhone).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, �������!');?>");
     contform.clientphone.focus();
     return  false;
   }
var strMessage  =  contform.message.value;
   if (encodeURI(strMessage).length  <  1)
   {
     alert("<?=Translate($LANG,'�������, ����������, ���������!');?>");
     contform.message.focus();
     return  false;
   }

 
var   data = 'clientname='+ strName+'&email='+strMail+'&clientcountry='+strCountry+'&clientphone='+strPhone+'&message='+strMessage;
//      alert(data);
  // �������� �������
       $.ajax({
                type: "POST",
                url: "senddata.php",
                data: data, 
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



