<?php
//logout.php
require_once 'includes/global.inc.php';
$userTools->logout();
header("Location: index.php");

?>