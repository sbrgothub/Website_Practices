<?php
    if (isset($_SESSION['submit'])){
        echo "<p>{$_SESSION['submit']}</p>";
        unset($_SESSION['submit']);
    }
    if (isset($_SESSION['error'])){
        echo "<p>{$_SESSION['error']}</p>";
        unset($_SESSION['error']);
    }
?>