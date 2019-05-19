<main>
    <form action="createArticleScript.php" method ="POST">
    <h3>Название статьи</h3>
    <br>
    <input name="ArticleTitle" type="text">
    <br>
    <h3>Содержание статьи</h3>
    <br>
    <input name="ArticleText" type="text" style =" width:500px; height:250px;">
    <br>
    <h3>Выберите категорию статьи</h3>
    <br>
    <?php 
    $categ = $db->select("category");
    ?>
    <select name ="ArticleCategory">
        <?php
        foreach($categ as $cat):?>

        <option><?=$cat["categoryTitle"]?></option>

<?php endforeach;?>
    </select>
    <br>
    <button style ="margin-top:20px;" name="createArt" type="sumbit">Опубликовать статью</button>
</form>
</main>