<?php
require_once "includes/global.inc.php";

$ArticleText="";
$ArticleTitle="";
$ArticleUser="";
$ArticleCategory="";

if(isset($_POST["createArt"])){

    $user = unserialize($_SESSION["user"]);

    $ArticleTitle = $_POST["ArticleTitle"];
    $ArticleText = $_POST["ArticleText"];
    $ArticleCategory = $_POST["ArticleCategory"];
    $ArticleUser = $user->username;

    $success = true;
    $userTools = new UserTools();

    if($success){
        $data["ArticleTitle"] = $ArticleTitle;
        $data["ArticleText"] = $ArticleText;
        $data["ArticleUser"] = $ArticleUser;
        $data["ArticleCategory"] = $ArticleCategory;

        $newArticle = new Article($data);

        $newArticle->save(true);


    }

    header("Location: article.php");

}