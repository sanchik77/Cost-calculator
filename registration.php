<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Регистрация на складе</title>
	<?php require_once 'head.php'  ?>


</head>
<body>
	<header class="header__sign-up">
    <?php require_once 'navbar.php' ?>
    <!-- Форма регистрации -->
	<div class="wrap__form">
		<form action="apps/sign-up.php" method="post" enctype="multipart/form-data">
			<span class="style__title_login">Регистрация</span>
			<div class="formes__login ">
                <label for="">ФИО *</label>
				<input type="text" name="full_name" placeholder="Ваше ФИО">
			</div>
			<div class="formes__login">
                <label for="">Ваш email *</label>
				<input type="email" name="email"  placeholder="Введите свой email">
			</div>
			<div class="formes__login">
                <label for="">Ваш телефон *</label>
				<input type="number" name="number"  placeholder="Введите свой телефон">
            </div>
            <div class="formes__login">
                <label for="">Введите логин *</label>
				<input type="text" name="login"  placeholder="Логин">
			</div>
			<div class="formes__login">
                <label for="">Пароль *</label>
				<input type="password" name="password"  placeholder="Введите пароль">
			</div>
			<div class="formes__login">
            <label for="">Подтвердите пароль *</label>
				<input type="password" name="password_confirm"  placeholder="Подтвердите пароль">
			</div>
			<button class="button__forms" type="submit">Зарегистрироваться</button>
		</form>
		<p>
		У вас уже есть аккаунта? - <a href="authorization.php" class="sign-up__log-in">Авторизируйтесь</a>
        </p>
           <?php 
           if($_SESSION['message']){
               echo '
               <p class="msg"> ' . $_SESSION['message'] . ' </p> ';
           }
           unset($_SESSION['message']);
           ?>
        
		
	</div>

	</header>
	
	
</body>
</html>