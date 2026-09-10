<?php
    require 'db.php';
    if (isset($_GET['id']) and isset($_GET['level'])){
        $id=$_GET['id'];
        $level=$_GET['level'];
        $next='Easy';
        if ($level=='Easy'){
            $next='Hard';
        }

        $sql_toggle='update quests set difficulty=:next where id=:id';
        $stm_toggle=$pdo->prepare($sql_toggle);
        $stm_toggle->execute([
            ':next'=>$next,
            ':id'=>$id
        ]);
    }
    header('Location: main.php');
    exit;
?>