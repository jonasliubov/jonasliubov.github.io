<?php
// Переменные с формы
$name = $_POST['name'];
$text = $_POST['email'];
$check = false; //$_POST['check'];

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
    die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
}
$result = $mysqli->query("INSERT INTO ".$db_table." (name,text,check) VALUES ('$name','$text', '$check')");
//$query = "INSERT into person (name, mail, plusOne) VALUES ('$name', '$text', ".((int) $check))).";

if ($result == true){
    echo "Информация занесена в базу данных";
}else{
    echo "Информация не занесена в базу данных";
}