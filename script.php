<?php

$name = $_POST["sirname"];
$email = $_POST["email"];
$text_message = $_POST["message"];

$db=mysqli_connect("localhost", "root","", "test");

$sql = "INSERT INTO test(name, email, message) VALUES ('$name', '$email','$text_message')";
$result=mysqli_query($db, $sql) or die("Ошибка в запросе!".mysql_error());
?>