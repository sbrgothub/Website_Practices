<?php
session_start();
require 'db.php';
if (isset($_SESSION['username']) and isset($_SESSION['password']) and $_SESSION['username']!='' and $_SESSION['password']!=''){
    $username=$_SESSION['username'];
    $password=$_SESSION['password'];
    $hashed=password_hash($password,PASSWORD_DEFAULT);
    $sql_insert='insert into users(username,password_hash) values(:user,:pass)';
    $stm_insert=$pdo->prepare($sql_insert);
    $stm_insert->execute([
        ':user'=>$username,
        ':pass'=>$hashed
    ]);
    $_SESSION['error_post']=['Submitted<br>Login with created account or signup another account ','green'];
    header('Location: login.php');
}
?>