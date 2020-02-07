<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Регистрация</title>
	<?php require 'php/includes.php' ?>
	<link rel="stylesheet" type="text/css" href="css/loginRegister.css">
</head>
<body>
	<?php require 'php/header.php' ?>

	<?php 
		require 'php/db.php';
		$data = $_POST;
		if( isset($data['do_signup']) ){
			$errors = array();
			if( trim($data['login']) == '' ){
				$errors[] = 'Введите логин!';
			}
			if( trim($data['email']) == '' ){
				$errors[] = 'Введите E-mail!';
			}
			if( trim($data['tel']) == ''){
				$errors[] = 'Введите номер мобильного телефона!';
			}
			if( $data['password'] == '' ){
				$errors[] = 'Введите пароль!';
			}
			if( empty($errors) ){
			$user = R::dispense('users');
			$user->login = $data['login'];
			$user->email = $data['email'];
			$user->name = $data['name'];
			$user->middleName = $data['middleName'];
			$user->tel = $data['tel'];
			$user->password = $data['password'];
			R::store($user);
			echo '
			<center>
				<div style="color: green;
				margin-top: 5px;
				margin-bottom: 5px;
				padding-top: 5px;
				padding-bottom: 5px;">
					Регистрация прошла успешно!
				</div>
				<hr>
			</center>';
		} else{
			echo '
			<center>
				<div style:color red;
				margin-top: 5px;
				margin-bottom: 5px;
				padding-top: 5px;
				padding-bottom: 5px;">'
					.array_shift($errors).
				'</div>
				<hr>
			</center>';
		}
		}
	?>
	
	<div class="panel">
		<form action="/signup.php" method="POST">
		<center>
		<p> <h5>E-mail: </h5> </p>
		<p> <input required="" type="email" name="email"> </p>
		<p> <h5>Номер телефона: </h5> </p>
		<p> <input required="" type="tel" name="tel" pattern="\+7[0-9]{10}" value="+7"> </p>
		<p> <h5>Имя: </h5> </p>
		<p> <input required="" type="text" name="name"> </p>
		<p> <h5>Отчество: </h5> </p>
		<p> <input required="" type="text" name="middleName"> </p>
		<p> <h5>Логин: </h5> </p>
		<p> <input required="" type="text" name="login"> </p>
		<p> <h5>Пароль: </h5> </p>
		<p> <input required="" type="password" name="password"> </p>
		<p><input type="submit" name="do_signup" value="Зарегестрироваться"></p>
		</center>
		</form>
	</div>

</body>
</html>