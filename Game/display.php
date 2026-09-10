<?php
require 'pager.php';
$sql_join='select q.*,z.zone_name from quests as q join zones as z on q.zone_id=z.id ';

if (isset($_GET['search']) and $_GET['search']!=''){
    $flag=1;
    $search=$_GET['search'];
    $sql_join.='where q.title like :search or z.zone_name like :search order by z.zone_name limit :limit offset :offset';
    $stm_join=$pdo->prepare($sql_join);
    $stm_join->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
    $stm_join->bindValue(':limit', $limit, PDO::PARAM_INT);
    $stm_join->bindValue(':offset', $offset, PDO::PARAM_INT);
    $stm_join->execute();
}
else{
    $flag=0;
    $sql_join.='order by z.zone_name ';
    $sql_join.='limit :limit offset :offset';
    $stm_join=$pdo->prepare($sql_join);

    $stm_join->bindValue(':limit',$limit,PDO::PARAM_INT); # bind as int
    $stm_join->bindValue(':offset',$offset,PDO::PARAM_INT); #''

    $stm_join->execute();
}
require 'lim_page.php';

$fet_join=$stm_join->fetchAll(PDO::FETCH_ASSOC);
echo "<p>$limit,$page,$cnt</p>";
foreach($fet_join as $j){
    echo "<p>Quest : $j[title] | Difficluty: $j[difficulty] | Zone: $j[zone_name]</p><br>";
    echo "<a href='delete.php?id={$j['id']}' onclick='return confirm(\"Are you sure you want to delete this quest?\")'>Drop Quest</a><br>";
    echo "<a href='toggle.php?id={$j['id']}&level={$j['difficulty']}'>Toggle Difficulty</a><br><br>";
}

?>