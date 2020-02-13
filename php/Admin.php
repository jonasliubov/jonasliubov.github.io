<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin|Jonas&Liubov</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
</head>
<body>
<div class="container">
    <h2 class="text-center">Guest list</h2>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>+1</th>
            <th>Delete</th>
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
        $query ="SELECT id, name, mail, plusOne FROM person";
        // Если есть ошибка соединения, выводим её и убиваем подключение
        $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
        if($result){
            $rows = mysqli_num_rows($result); // количество полученных строк
            while($book = mysqli_fetch_assoc($result)){
                echo "<tr>";
                /*echo "<td>".$book['id']."</td>";*/
                echo "<td>".$book['name']."</td>";
                echo "<td>".$book['mail']."</td>";
                echo "<td>".$book['plusOne']."</td>";
                echo "<td><a href='delete.php?id=".$book['id']."'>
                        <button type=\"button\" class=\"btn btn-outline-primary\">Delete</button>
                        </a></td>";
                echo "</tr>";
            }
            // очищаем результат
            mysqli_free_result($result);
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>



