<?php
$name = trim($_POST["name"]);
$mail = trim($_POST["email"]);
$check = trim($_POST["check"]);

// settings connect
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_base = 'test';
$db_table = "person";
// connect db
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$check == true ? $check = '2': $check = '1';
$result = $mysqli->query("INSERT INTO " . $db_table . " (name, mail, plusOne) VALUES ('$name','$mail', '$check')");
