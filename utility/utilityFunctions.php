<?php
($notDirect) or die("You can't access this page");
function isLoggedIn(){
    if(!isset($_SESSION['loggedIn'])){
        header("Location:./index.php?page=login");
    }
}