<?

   // ���� ����� ������� ��������
   if ($ok==1) $contactform="<div class=cform><center> <h2>��������� ������� ����������!</h2><p>���������� �� ������� � ����� ������������!</p></center></div>";

   // ���� �� ������
   else  $contactform="
   <div class=cform>
   <center> <h2>��������� ���������</h2></center>
   <form name=contform action='smessage.php' method=POST>
      <input type=hidden name=mes value=12>
      <p>���� ���:<br><input name=clientname></p>
      <p>E-mail:<br><input name=clientmail></p>
      <p>������:<br><input name=clientcountry></p>
      <p>�������:<br><input name=clientphone></p>
      <p>���������:<br><textarea name=message rows=6></textarea></p>
    </form>
    <p>
        <center><div class=cfinfo>���������� ��������� ��� ���� �����</div>
        <div class=bbc onclick='��������� �����'><h6>��������� ���������</h6></div></center>
    </p>
   </div>
   ";

   echo"$contactform";

?>

