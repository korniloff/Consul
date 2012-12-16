<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>

   <meta http-equiv="Content-Type" content="text/html; charset=windows-1251"/>

</head>
<BODY>   
<?php
include("inc/settings.php");
include ("inc/head.php");

//Получаем данные
$data = $_POST[data];
mailSend($adminemail,"Consul site info", $data);
?>
<center> <h2><?=Translate($LANG,'Сообщение успешно отправлено');?>!</h2>
<p><?=Translate($LANG,'Благодарим за интерес к нашим предложениям');?>!
</p>
</center>
</BODY>
