<?php
require_once("inc/functions.php");
//Получаем данные
$data = $_POST[data];
mail ($adminemail,"Consul site info", $data);
?>
<center> <h2><?=Translate($LANG,'Сообщение успешно отправлено');?>!</h2><p><?=Translate($LANG,'Благодарим за интерес к нашим предложениям');?>!</p></center>

