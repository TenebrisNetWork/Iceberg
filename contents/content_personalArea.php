<?php 
$user = unserialize($_SESSION["user"]);
if(preg_match('/'.$user->username.'/' , 'tryone')) {
    ?>
    <main>
        <p><?=$user->username?></p>
        <p><?=$user->email?></p>
        <p><?=$user->join_date?></p>

        <p><a href="../addNews.php">Добавить новость</a></p>
</main>
    <?php
} else  {?>
<main>
<p><?=$user->username?></p>
        <p><?=$user->email?></p>
        <p><?=$user->join_date?></p>

</main>

<?php } ?>