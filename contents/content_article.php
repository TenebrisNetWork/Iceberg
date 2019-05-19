<main class = mainArticle> 


    <div class="sidebarArticle">
    <?php 
if($_SESSION["logged_in"] == 1) {
    ?>
    <h3><a href="../createArticle.php">Создать статью</a></h1>
    <?php
}
?>
    <ul>
    <li><a href="/article.php">Катеории:</a></li>

    <?php 
    $cate = $db->select("category");

    foreach($cate as $cat) : ?>

    <li><a href="/article.php?category=<?=$cat["categoryTitle"]?>"><?=$cat["categoryTitle"]?></a></li>

    <?php endforeach; ?>

    </ul>

    </div>


    <div class="contentArticle">
       
<?php 
$catename = $_GET["category"];
if($catename == ""){
    $where = NULL;
} else {
    $where = "ArticleCategory = '$catename'";
}

$cr = $db->select("article", $where);

if($cr["id"]){
    ?>
    <div class="Article">
            <h3><?=$cr["ArticleTitle"]?></h3>
            <h4>Автор: <?=$cr["ArticleUser"]?></h4>
            <p><?=mb_substr($cr["ArticleText"], 0, 200, "UTF-8")."..."?></p>
            <span><a href="../readArticle.php?id=<?=$cr["id"]?>">Читать далее</a></span>
        </div>
    <?php

} else {
foreach($cr as $c): ?> 
        <div class="Article">
            <h3><?=$c["ArticleTitle"]?></h3>
            <h4>Автор: <?=$c["ArticleUser"]?></h4>
            <p><?=mb_substr($c["ArticleText"], 0, 200, "UTF-8")."..."?></p>
            <span><a href="../readArticle.php?id=<?=$c["id"]?>">Читать далее</a></span>
        </div>
<?php  endforeach; ?>
<?php } ?>


    </div>
</main>