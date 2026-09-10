<?php
$host='localhost';
$dbname='quest_tracker';
$username='root';
$password='';
$port=3307;

// dsn tells pdo exactly where to go
$dsn= "mysql:host=$host;dbname=$dbname;port=$port;charset=utf8mb4";
try {
    $pdo =new PDO($dsn, $username, $password);
    $conn_error="connected";
    
    // Tell PDO to throw an exception if it encounters an error
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}
catch (PDOException $e){
    $conn_error='database connection failed'. $e->getMessage();
}
?>