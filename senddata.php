<?php
//include("inc/settings.php");
setlocale(LC_CTYPE, 'ru_RU.CP1251');
include ("inc/head.php");
include("admin/inc/const.php");
require_once("inc/functions.php");

//�������� ������
//$data = $_POST[data];
//                data: "clientname="+ $('#clientname').val()+"&email="$('#clientmail').val()+"&clientcountry="+$('#clientcountry').val()+
//                      "&clientphone"+$('#clientphone').val()+"&message="+$('#message').val();
$clientname=iconv("utf-8", "windows-1251", $_POST['clientname']);
$country=iconv("utf-8", "windows-1251", $_POST['clientcountry']);
$message=iconv("utf-8", "windows-1251", $_POST['message']);
$TEXT.="��������� �� ����� ".$mainurl." ".date("d/m/Y H:i")."<br><br>";
$TEXT.="<b>����������:</b> ".$clientname;
$TEXT.="<br><b>Email:</b> ".$_POST['email'];
$TEXT.="<br><b>������:</b> ".$country;
$TEXT.="<br><b>�������:</b> ".$_POST['clientphone'];
$TEXT.="<br><br><b>���������:</b> ".$message;

$nnn=$_GET['clientname'];
$mmm=$_GET['email'];

mailSend($adminemail,"��������� �� ����� Consul",$TEXT,$from="$mmm",$replyto="$mmm",$bcc=""); 
//mailSend($adminemail,"Consul site info", $data);
?>
<BODY>
<center> <h2><?=Translate($LANG,'��������� ������� ����������');?>!</h2>
<p><?=Translate($LANG,'���������� �� ������� � ����� ������������');?>!
</p>
</center>
</BODY>
