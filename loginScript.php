<?php
require_once "includes/global.inc.php";
$error = "";
$username = "";
$password = "";

if(isset($_POST["sumbit-login"])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $userTools = new UserTools();

    if($userTools->login($username, $password)){
        header("Location: index.php");
    } else {
        $error = "Введен неверный логин или пароль.";
        echo $error;
    }

}