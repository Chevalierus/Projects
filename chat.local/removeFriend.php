<?php
include "config/database.php";
include "settings.php";

if(isset($_GET["user_id"])){

$sql = "DELETE FROM friends WHERE `friends`.`user_id_1` =" . $polzovatel_id . " AND `friends`.`user_id_2` =" . $_GET["user_id"];

if(mysqli_query($connect, $sql)){
	header("Location: /");
}
}
?>
<?php
/*
"DELETE FROM `friends` WHERE `friends`.`user_id_1` = 3 AND `friends`.`user_id_2` = 1"?*/
?>

