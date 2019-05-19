<?php

require_once "includes/global.inc.php";

$NewsTitle = "";
$NewsText = "";

if(isset($_POST["addNews"])){

    $NewsText = $_POST["NewsText"];
    $NewsTitle = $_POST["NewsTitle"];

    $success = true;
    $userTools = new UserTools();


    $data["NewsTitle"] = $NewsTitle;
    $data["NewsText"] = $NewsText;

    $newNews = new News($data);

    $newNews->save(true);

    header("Location: index.php");

}