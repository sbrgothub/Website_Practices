<?php
    $sql_select='select * from zones';
    $stm_select=$pdo->prepare($sql_select);
    $stm_select->execute();
    $fet_select=$stm_select->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($fet_select as $i){
        echo "<option value={$i['id']}>{$i['zone_name']}</option>";
    }
?>