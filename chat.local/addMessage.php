<?php
include "config/database.php";

	if(isset($_POST["sendmessage"])){ 
    $sql = "INSERT INTO message (to_user_id, from_user_id, message) VALUES ('" . $_POST["to_user_id"] . "', '" . $_POST["from_user_id"] . "', '" . $_POST["message"] . "')";
    mysqli_query($connect, $sql);
    }

    $to_polzovatel_id = $_POST["to_user_id"];
    $polzovatel_id = $_POST["from_user_id"];
	
	include 'modules/message.php';
