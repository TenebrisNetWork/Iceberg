<?php

$id = $_GET["id"];
$article = $db->select("article", "id = ".$id." ");
?>
<main class = "mainReadArticle">
    <div class="articleread">
        <h1><?=$article["ArticleTitle"]?><span>(<?=$article["ArticleCategory"]?>)</span></h1>
        <p><?=$article["ArticleText"]?></p>
        <b><?=$article["ArticleUser"]?>|<?=$article["ArticleTime"]?></b>
        
    </div>
</main>