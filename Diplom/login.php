<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Авторизация</title>
	<?php require 'php/includes.php' ?>
	<link rel="stylesheet" type="text/css" href="css/loginRegister.css">
</head>
<body>
	<?php require 'php/db.php' ?>
	<?php require 'php/header.php' ?>
	<div class="panel">
		<form>
			<center>
				<p><h5>Логин: </h5></p>	
				<p><input type="login" name="login"></p>
				<p><h5>Пароль: </h5></p>
				<p><input type="password" name="password"></p>
				<p><input type="submit" name="loginButton" value="Войти"></p>
				<p><button><a href="signup.php">Зарегестрироваться</a></button></p>
			</center>
		</form>	
	</div>
</body>
</html>