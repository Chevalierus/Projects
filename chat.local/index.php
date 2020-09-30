<?php
include "config/database.php";
include "settings.php";

if($polzovatel_id == null){
header("Location: /registr.php");
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

<form action="index.php" method="GET" id="search">
			<input type="text" name="search">

			<button>
				<img src="/Pictures/icon.png">
			</button>
</form>

<?php include "modules/spisok.php" ?>

</div>

<div id="message">
        <div id="message-show">
<?php
include "modules/message.php";
?>
</div>
<?php
if(isset($_GET['user'])){
?>
    <form id="form" action="addMessage.php" method="POST">
	<input type="hidden" name="to_user_id" value=" <?php echo $_GET["user"] ?>">
	<input type="hidden" name="from_user_id" value="<?php echo $polzovatel_id ?>">
        	<textarea name="message"></textarea>
        	<button type="submit" name='sendmessage'> <img src="Pictures/send.png"></button>
	</form>
	<?php
}
	?>
    </div>

<?php
include "modules/contacts.php"
?>

<!--<div class="authorization" id="autho-modal">
	<div class="zakrit">X</div>
   <form action="index.php" method="POST"> 
<?php
/*if(isset($_POST["email"]) && isset($_POST["password"])
&& $_POST["email"] != "" && $_POST["password"] != "") {
	$sql = "INSERT INTO users (email, password) VALUES ('" . $_POST["email"] . "','" . $_POST["password"] . "')";
if(mysqli_query($connect, $sql)){
	echo "<h2>Успешная регистрация.</h2>";
}else{
	echo "<h2>Попробуйте еще раз.</h2>";
}
}*/
?>
	<h2>Введите имя пользователя:
	<input type="text" name="email"></input>
	</h2>
 	<h3>Введите пароль:
	<input type="text" name="password"></input>
	</h3>
	<button type="submit">Регистрация</button>
</form>
</div>-->

<script src="script.js"></script>

</body>
</html>