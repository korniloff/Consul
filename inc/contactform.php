<?

   // ���� ����� ������� ��������
   if ($ok==1) $contactform="<div class=cform><center> <h2>".Translate($LANG,'��������� ������� ����������').
                            "!</h2> <p>".
                            Translate($LANG,'���������� �� ������� � ����� ������������').
                            "!</p></center></div>";

   // ���� �� ������
   else  $contactform="<div class=cform>  <center> <h2>".Translate($LANG,'��������� ���������').
                      "</h2></center>  <form name=contform action='smessage.php' method=POST>
                       <input type=hidden name=mes value=12>  <p>".Translate($LANG,'���� ���').
                       ":<br><input name=clientname></p>
      <p>E-mail:<br><input name=clientmail></p> <p>".Translate($LANG,'������').
      ":<br><input name=clientcountry></p> <p>".Translate($LANG,'�������').
      ":<br><input name=clientphone></p> <p>".Translate($LANG,'���������').
      ":<br><textarea name=message rows=6></textarea></p>
        </form>
        <p>
        <center><div class=cfinfo>".Translate($LANG,'���������� ��������� ��� ���� �����').
        "</div>  <div class=bbc onclick='".iiii.
        "'><h6>". Translate($LANG,'��������� ���������').
        "</h6></div></center> </p> </div>  ";

   echo"$contactform";

?>

