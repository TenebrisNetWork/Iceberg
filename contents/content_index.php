<main class = "mainIndex">
        
<div class="sidebarHOME">

</div>

<div class="TopPanelHOME">

</div>

<div class="contentHOME">

<?php 
$news = $db->select("news");
foreach($news as $art) :  ?>

<div class="NewsPanel">
    <h3><?=$art["NewsTitle"]?> <span>(<?=$art["NewsTime"]?>)</span></h3>
    <p><?=mb_substr($art["NewsText"], 0, 250, "UTF-8")."..."?></p>
    <div class ="readNext"><a href="/readNews.php?id=<?=$art["id"]?>">Читать далее</a></div>

</div>

<?php endforeach; ?>
    
</div>


</main>