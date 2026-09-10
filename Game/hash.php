<?php
session_start();
$password='suii123';
$hashed_pass=password_hash($password,PASSWORD_DEFAULT);
echo "<p>$hashed_pass</p>";


?>