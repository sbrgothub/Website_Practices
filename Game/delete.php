<?php
    require 'db.php';
    if (isset($_GET['id'])){
        $id=$_GET['id'];
        $sql_del='delete from quests where id=:id';
        $stm_del=$pdo->prepare($sql_del);
        $stm_del->execute([':id'=>$id]);
    }
    header('Location: main.php');
    exit;
?>