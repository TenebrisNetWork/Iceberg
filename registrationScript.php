<?php
require_once "includes/global.inc.php";

$username = "";
$password = "";
$password_confirm = "";
$email = "";
$error = "";

if(isset($_POST["sumbit-form"])){

    $username = $_POST["username"];
    $password = $_POST["password"];
    $password_confirm = $_POST["password_confirm"];
    $email = $_POST["email"];

    $success = true;
    $userTools = new UserTools();

    if($userTools->checkUsernameExists($username))
    {
    $error .= "Этот nicname уже использован.<br/> \n\r";
    $success = false;
    }

    if($password != $password_confirm) {
       $error .= "Пароли не совпадают.<br/> \n\r";
       $success = false;
    }

    if($success){

    $data["username"] = $username;
    $data["password"] = md5($password);
    $data["email"] = $email;

    $newUser = new User($data);

    $newUser->save(true);

    $userTools->login($username, $password);

    header("Location: index.php");
    }

}
require_once "modules/footer.php";