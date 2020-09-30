<ul>
<?php
if(isset($_GET["user"]) || isset($to_polzovatel_id)){
    $user_id = null;

    if(isset($_GET["user"])){
        $user_id = $_GET["user"];
    }else{
        $user_id = $to_polzovatel_id;
    }

$sql = " SELECT * FROM message" .
    " WHERE (to_user_id =" .  $user_id .  
    " AND from_user_id =" . $polzovatel_id . " ) " .
    " OR (to_user_id =" . $polzovatel_id . " AND from_user_id =" .  $user_id . ")";

$resultat = mysqli_query($connect, $sql);
$col_messages = mysqli_num_rows($resultat);

    $i = 0;
    while($i < $col_messages) {
    $slovo = mysqli_fetch_assoc($resultat);
    /*if(stristr(mb_strtolower($slovo["text"], 'UTF-8'), (mb_strtolower($_GET['user'], 'UTF-8')))){*/
                ?>
                <li>
                <div class="avatar">
                    <img src="Pictures/knight.png">
                </div>
                <?php
                $sql = "SELECT name FROM users WHERE id=" . $slovo["from_user_id"];
                $polzovatel = mysqli_query($connect, $sql);
                $polzovatel = mysqli_fetch_assoc($polzovatel);
                ?>
                <p> <?php echo $polzovatel["name"]; ?></p>
                <p> <?php echo $slovo["message"]; ?></p> 
                <div class="time"><?php echo $slovo["time"]; ?></div>
                </li>
                <?php
                $i = $i + 1; 
    }         

}
?>

</ul>


