<?php
session_start();
include 'functions.php';
$pdo = pdo_connect_mysql();



// Page is set to home by default
$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
// Include and show the requested page
include $page . '.php';
?>
