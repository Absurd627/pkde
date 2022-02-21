<?php
$sdbhost = "localhost";
$dbname = "bdit18";
$dbuser = "root";
$dbpassword = "";

$link = new mysql($dbhost, $dbuser< $dbpassword, $dbname);

if($link-> connect_error)
{
    echo "Ошибка при подключении к БД: $link->connect_error";
}
&>