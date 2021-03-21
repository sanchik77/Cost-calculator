<?php

session_start();
require_once '../connectDB.php';

if($_SESSION['user'])
    header('Location: profile.php');

$full_name = $_POST['full_name'];
$login = $_POST['login'];
$email = $_POST['email'];
$number = $_POST['number'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];



if($password === $password_confirm) {

    // Шифрование пароля
    $password = md5($password); 

    // Запрос для отправки данных с формы в бд
    mysqli_query($connection, "INSERT INTO `users_warehouse` (`id_user`, `full_name`, `email`,`number`, `login`, `password`) VALUES (NULL, '$full_name','$email','$number', '$login',  '$password')");

    $_SESSION['message'] = 'Регистрация прошла успешно';
        header('Location: ../authorization.php');
    
}else{
    $_SESSION['message'] = 'Пароли не совпадают' ;
    header('Location: ../registration.php');
}

?>

