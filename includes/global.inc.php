<?php
require_once 'classes/User.class.php';
require_once 'classes/UserTools.class.php';
require_once 'classes/DB.class.php';
require_once 'classes/Article.class.php';
require_once 'classes/News.class.php';

$db = new DB();
$db->connect();

$userTools = new UserTools();

session_start();

if(isset($_SESSION['logged_in'])) {
$user = unserialize($_SESSION['user']);
$_SESSION['user'] = serialize($userTools->get($user->id));
}
?>