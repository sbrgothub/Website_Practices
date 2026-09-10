<?php
session_start();
if(!isset($_SESSION['loggedin']) or $_SESSION['loggedin']!=true){
    header('Location: login.php');
    exit;
}
?>