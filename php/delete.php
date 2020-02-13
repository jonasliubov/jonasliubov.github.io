<?php
$id = $_GET['id'];

$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_base = 'test';
$db_table = "person";
$conn = mysqli_connect($db_host, $db_user, $db_password, $db_base) or die("Ошибка " . mysqli_error($link));

$sql = "DELETE FROM person WHERE id = $id";

if (mysqli_query($conn, $sql)) {
    echo "Good!";
    mysqli_close($conn);
    header('Location:Admin.php');
    exit;
} else {
    echo "Error deleting record";
}