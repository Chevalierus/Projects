<div id="spisok">
    <ul>
        <?php
        $i = 0;
        if(isset($_GET["search"])){
        $sql = "SELECT * FROM users WHERE name LIKE '%" . $_GET["search"] . "%' OR surname LIKE '%" . $_GET["search"] . "%' ";
        $resultat = mysqli_query($connect, $sql);
        $col_polzovateli = mysqli_num_rows($resultat);
        while($i < $col_polzovateli) {
        $polzovatel = mysqli_fetch_assoc($resultat);
        ?>
        <li>
        <a href='/index.php?user=<?php echo $polzovatel["id"]; ?>'>
        <div class="avatar">
        <img src="<?php echo $polzovatel["photo"]; ?> ">
        </div>
        <h2><?php echo $polzovatel["name"]; ?></h2>
        <h2><?php echo $polzovatel["surname"]; ?></h2>
        </a>
        </li>
        <?php
        $i = $i + 1;
    }
}elseif($polzovatel_id == $_COOKIE["polzovatel_id"]){
        $sql = "SELECT * FROM users WHERE id!=" . $polzovatel_id . "";
        "";
        $result = mysqli_query($connect, $sql);
        $col_polzovateli = mysqli_num_rows($result);
        while($i < $col_polzovateli) {
        $polzovatel = mysqli_fetch_assoc($result);
        ?>
        <li>
        <a href='/index.php?user=<?php echo $polzovatel["id"]; ?>'>
        <div class="avatar">
        <img src="<?php echo $polzovatel["photo"]; ?> ">
        </div>
        <h2><?php echo $polzovatel["name"]; ?></h2>
        <h2><?php echo $polzovatel["surname"]; ?></h2>
        </a>
        </li>
        <?php
        $i = $i + 1;
}
}
?> 
    </ul>
</div>