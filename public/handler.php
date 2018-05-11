<?php
require('../config.php');
$link = mysqli_connect($db_host, $db_username, $db_password, $db_database);
mysqli_set_charset($link, "utf8");
if(mysqli_connect_errno()){
/*    mail($constant['config.email'], 'Ошибка в подключении к БД ', 'Временно нет доступа к базе данных' );*/
    exit();
}
//get Setting
$sql_setting = "SELECT * FROM `settings`";

$result_setting = mysqli_query($link, $sql_setting);

$settings = mysqli_fetch_all($result_setting, 1);
$constant = [];
foreach ($settings as $key => $setting ) {
    $constant[$setting['name']] = $setting['description'];
}
//var_dump($constant);
$json = @file_get_contents($constant['tariffing']);
$fp = fopen('../content.json', 'w');
fwrite($fp, $json);
fclose($fp);