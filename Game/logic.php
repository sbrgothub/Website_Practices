<?php
    // session_start();
    if (isset($_POST['quest']) and isset($_POST['level']) and isset($_POST['zone'])){
        $quest=$_POST['quest'];
        $level=$_POST['level'];
        $zone=$_POST['zone'];

        if ($quest!=''){
            $sql_insert="insert into quests (title,difficulty,zone_id) values(:quest,:level,:zone)";
            $stm_insert=$pdo->prepare($sql_insert);
            $stm_insert->execute([
                ':quest'=>$quest,
                ':level'=>$level,
                ':zone'=>$zone
            ]);
            $_SESSION['submit']='Submitted';

            header('Location:main.php');
            exit;
        }
        
        else{
            $_SESSION['error']= "Enter quest title";
        }
    }
?>