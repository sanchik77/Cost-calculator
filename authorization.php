<?php
session_start();

if($_SESSION['user'])
    header('Location: ../profile.php');
    

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Вход в личный кабинет</title>
	<?php require_once 'head.php'  ?>


</head>
<body>
	<header class="header__sign-up">
    <?php require_once 'navbar.php' ?>
    <!-- Форма регистрации -->
    <div class="container">
        <?php 
           if($_SESSION['message']){
               echo '
               <p class="msg"> ' . $_SESSION['message'] . ' </p> ';
           }
           unset($_SESSION['message']);
           ?>
    </div>
    
        
	<div class="wrap__form">
		<form action="apps/log-in.php" method="post" enctype="multipart/form-data">
			<span class="style__title_login">Вход</span>
			<div class="formes__login ">
                <label for="">Логин</label>
				<input type="text" name="login" placeholder="Введите свой логин">
			</div>
			<div class="formes__login">
                <label for="">Пароль</label>
				<input type="text" name="password"  placeholder="Введите Ваш пароль">
            </div>
            <div class="buttons__form_login">
                <button class="button__forms w-35" type="submit">Войти</button>
                <a class="button__registration_form-login" href="registration.php">Регистрация</a>
            </div>
            
        </form>
      
		
      
		
	</div>

	</header>

	
</body>
</html>
