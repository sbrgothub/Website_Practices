<?php
if ($limit>1){
    $l_down=$limit-1;
    if ($flag==1){echo "<a href='main.php?limit=$l_down&search=$search'>⬇limit</a>";}
    else{echo "<a href='main.php?limit=$l_down'>⬇limit</a>";}
}
if ($limit<$cnt){
    $l_up=$limit+1;
    if ($flag==1){echo "<a href='main.php?limit=$l_up&search=$search'>⬆limit</a>";}
    else{echo "<a href='main.php?limit=$l_up'>⬆limit</a>";}
}

if ($page>1){
    $p_up=$page-1;
    if ($flag==1){echo "<a href='main.php?page=$p_up&search=$search&limit=$limit'>Prev</a>";}
    else{echo "<a href='main.php?page=$p_up&limit=$limit'>Prev</a>";}
}

if ($page<$tot_pages){
    $p_down=$page+1;
    if ($flag==1){echo "<a href='main.php?page={$p_down}&search={$search}&limit=$limit'>Next</a>";}
    else{echo "<a href='main.php?page={$p_down}&limit=$limit'>Next</a>";}
}
?>