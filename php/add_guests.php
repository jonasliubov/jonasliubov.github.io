<?php
$name = trim($_POST["name"]);
$mail = trim($_POST["email"]);
$check = trim($_POST["check"]);

if ($check == true){
    $check = '2';
}else{
    $check = '1';
}
// Параметры для подключения
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'test'; // Имя БД
$db_table = "person"; // Имя Таблицы БД

// Подключение к базе данных
$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

// Если есть ошибка соединения, выводим её и убиваем подключение
if ($mysqli->connect_error) {
    die('Ошибка : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
$result = $mysqli->query("INSERT INTO " . $db_table . " (name, mail, plusOne) VALUES ('$name','$mail', '$check')");



/*
    $recepient = "jonasliubov@gmail.com";
    $siteName = "jonasliubov.best";

    $message = "Имя: $name \nemail: $mail";

    $pagetitle = "Заявка с сайта \"$siteName\"";
    mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");
*/