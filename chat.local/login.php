<?php
include "config/database.php";
if(isset($_POST["email"]) && isset($_POST["password"])
&& $_POST["email"] != "" && $_POST["password"] != "") {

$sql = "SELECT * FROM users WHERE email LIKE '" . $_POST["email"] . "' AND password LIKE '" . $_POST["password"] . "'";

$result = mysqli_query($connect, $sql);
$col_polzovateley = mysqli_num_rows($result);
if($col_polzovateley = 1) {
	$polzovatel = mysqli_fetch_assoc($result);
	setcookie("polzovatel_id", $polzovatel["id"], time() + 60);
	header("Location: /");
}else{
	echo "<h2>Неверный логин или пароль</h2>";
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
include "siteparts/shapka.php"
?>

<div id="content">

	<div id="users">
            
			<form action="login.php" method="POST" id="search">
       		<h2>Введите имя пользователя:<br/>
			<input type="text" name="email"></input>
			</h2>
		 	<h3>Введите пароль:<br/>
			<input type="text" name="password"></input>
			</h3>
			<button type="submit">Авторизация</button>
            </form>
            
    </div>
</div>

