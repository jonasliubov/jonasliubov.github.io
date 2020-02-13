<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h2>Guest list</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>+1</th>
            <th>Edit</th>
        </tr>
        </thead>
        <tbody>
<?php
$db_host = "localhost";
$db_user = "root"; // Логин БД
$db_password = ""; // Пароль БД
$db_base = 'test'; // Имя БД
$db_table = "person"; // Имя Таблицы БД

// Подключение к базе данных
$link = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die("Ошибка " . mysqli_error($link));
$query ="SELECT name, mail, plusOne FROM person";
// Если есть ошибка соединения, выводим её и убиваем подключение
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result){
    $rows = mysqli_num_rows($result); // количество полученных строк

    for ($i = 0 ; $i < $rows ; ++$i){
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>" ;
        echo "<td id=\"del\"><button type=\"submit\" class=\"btn btn-outline-primary\">Delete </button></td>" ;
        echo "</tr>";
    }
    // очищаем результат
    mysqli_free_result($result);
}

?>
        </tbody>
    </table>
</div>
<!--<div class="container">
    <h2>Order list</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>+1</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>john@example.com</td>
        </tr>
        <tr>
            <td>Mary</td>
            <td>Moe</td>
            <td>mary@example.com</td>
        </tr>
        <tr>
            <td>July</td>
            <td>Dooley</td>
            <td>july@example.com</td>
        </tr>
        </tbody>
    </table>
</div>-->
</body>
</html>



