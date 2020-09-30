<?php
include "config/database.php";

if(isset($_POST["email"]) && isset($_POST["password"])
&& $_POST["email"] != "" && $_POST["password"] != "") {
	$sql = "INSERT INTO users (email, password) VALUES ('" . $_POST["email"] . "','" . $_POST["password"] . "')";
if(mysqli_query($connect, $sql)){
	echo "<h2>Успешная регистрация.</h2>";
}else{
	echo "<h2>Попробуйте еще раз.</h2>";
}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Чатик</title>
	<link rel="stylesheet" type="text/css" href="stilno.css">
</head>
<body>

<?php
include "siteparts/shapka.php";
?>
<div id="content">

	<div id="users">

 <form action="registr.php" method="POST">
	<h2>Введите имя пользователя:</br>
	<input type="text" name="email"></input>
	</h2>
 	<h3>Введите пароль:</br>
	<input type="text" name="password"></input>
	</h3>
	<button type="submit">Регистрация</button>
</form>

</div>
</div>
