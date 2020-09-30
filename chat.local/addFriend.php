<?php
include 'config/database.php';
include "settings.php";

if(isset($_GET["user_id"])){

$sql = "INSERT INTO friends (user_id_1, user_id_2) VALUES ('" . $polzovatel_id . "','" . $_GET["user_id"] . "')";
if(mysqli_query($connect, $sql)){
	include"modules/friend_list.php";
}else{
	echo "<h2>Ошибка</h2>";
}
}
?>