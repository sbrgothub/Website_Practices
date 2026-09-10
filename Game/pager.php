<?php

$find_page='select count(*) as c from quests';
// $params=[];

if(isset($_GET['search'])){
    $search=$_GET['search'];
    $find_page = 'select count(*) as c from quests as q join zones as z on q.zone_id = z.id ';
    $find_page .= 'where q.title like :search or z.zone_name like :search';
    $stm_find = $pdo->prepare($find_page);
    $stm_find->bindValue(':search', '%' . $search . '%', PDO::PARAM_STR);
}
else{
    echo "<p>no hi</p>";
    $stm_find = $pdo->prepare($find_page);
    }

$stm_find->execute();
$fet_page=$stm_find->fetchAll(PDO::FETCH_ASSOC);
$cnt=$fet_page[0]['c'];

if(isset($_GET['page']) and isset($_GET['limit'])){
    $page=(int)$_GET['page'];
    $limit=(int)$_GET['limit'];
    $offset=($page*$limit)-$limit;
}
elseif(isset($_GET['limit'])){
    $page=1;
    $limit=(int)$_GET['limit'];
    $offset=0;

}
else{
    $limit=$cnt;
    $offset=0;
    $page=1;
}
if ($limit==0){$tot_pages=1;}
else{$tot_pages=ceil($cnt/$limit);}

?>