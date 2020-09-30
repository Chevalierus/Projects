<?php
$sql = "SELECT * FROM users WHERE id!= " . $polzovatel_id;
$result = mysqli_query($connect, $sql);

$col_polzovateley = mysqli_num_rows($result);

	$i = 0;
	while ($i < $col_polzovateley) {
		$polzovatel = mysqli_fetch_assoc($result);
		?>
	<li>
    <div class="avatar">
    <img src="<?php echo $polzovatel["photo"]; ?> ">
    </div>
    <h2><?php echo $polzovatel["name"]; ?></h2>
    <h2><?php echo $polzovatel["surname"]; ?></h2>
    <?php
    $sql = "SELECT * FROM friends WHERE user_id_1=" . $polzovatel["id"] . " AND user_id_2=" . $polzovatel_id . " OR user_id_2=" . $polzovatel["id"] . " AND user_id_1=" . $polzovatel_id;

    $resultat = mysqli_query($connect, $sql);
    $col_friend = mysqli_num_rows($resultat);

    if($col_friend > 0) {
    	?>
    	<a href="removeFriend.php?user_id=<?php echo $polzovatel["id"]; ?>">Удалить из друзей</a>
    	<?php
    } else {
         ?>
    	<div data-ssylka="addFriend.php?user_id=<?php echo $polzovatel["id"]; ?>" onclick="addFriend(this);">Добавить в друзья</div>
    	<?php
    }
    ?>
 	</li>
	<?php
	$i = $i + 1;
	}
	?>