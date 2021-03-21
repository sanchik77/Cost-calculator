<?php

session_start();
require_once '../connectDB.php';



$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($connection, "SELECT * FROM `users_warehouse` where `login` = '$login' AND `password` = '$password'");

if(mysqli_num_rows($check_user) > 0){

$user = mysqli_fetch_assoc($check_user);


$_SESSION['user'] = [
    "id_user" => $user['id_user'],
    "login" => $user['login'],
    "email" => $user['email'],
];
header('Location: ../profile.php');

}else{
    $_SESSION['message'] = 'Пользователь с таким логином не найден. Пожалуйста, проверьте написание или пройдите  <a class="msg-a" href="registration.php">  Регистрацию </a>' ;
        header('Location: ../authorization.php');
}


?>
