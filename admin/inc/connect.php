<?php

    foreach($_REQUEST as $var=>$val) $$var=$val;
    $PHP_SELF=$_SERVER['PHP_SELF'];

    $link = mysql_connect ("localhost", "root", "") or die ("Could not connect");
    $base=mysql_select_db ("consulbase");

    mysql_query("SET NAMES cp1251");
?>