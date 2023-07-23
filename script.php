<?php
$db = mysqli_connect("localhost", "root", "");
$name = $_POST["sirname"];
$email = $_POST["email"];
$text_message = $_POST["message"];

$sql = "INSERT INTO test(name, email, message) VALUES ('$name', '$email', '$text_message')";
$result = mysqli_query($db, $sql);

if ($db == false){
    print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
}
else {
    print("Соединение установлено успешно");
}
if ($result == false) {
    print("Произошла ошибка при выполнении запроса");
}
?>