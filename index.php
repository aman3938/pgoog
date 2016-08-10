<?php
$notDirect = 1;
include_once './utility/utilityFunctions.php';
include_once './model/database.php';
session_start();
$page  = isset($_GET['page'])?$_GET['page']:"";

switch($page){
    case 'login':
        include_once('./templates/login.php');
        break;
    case 'processLogin':
        include_once('./controller/processLogin.php');
        break;
    default:
        isLoggedIn();
        include_once('./controller/dashboard.php');
}
closeConnection();