<?php
require_once("inc/functions.php");
//�������� ������
$data = $_POST[data];
mail ($adminemail,"Consul site info", $data);
?>
<center> <h2><?=Translate($LANG,'��������� ������� ����������');?>!</h2><p><?=Translate($LANG,'���������� �� ������� � ����� ������������');?>!</p></center>

