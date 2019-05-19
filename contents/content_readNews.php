<?php 
$id = $_GET["id"];
$news = $db->select("news", "id=".$id."");
?>
<main>
    <p><?=$news["NewsTitle"]?></p>
    <p><?=$news["NewsText"]?></p>
    <p><?=$news["NewsTime"]?></p>

</main>