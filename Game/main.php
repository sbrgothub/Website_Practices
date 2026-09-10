<?php
    require 'db.php';
    require 'check_login.php';
    require 'logic.php';
    include 'header.php';
?>
<br><br>
<main>
    <?php echo "<p>$conn_error</p>"; ?>
    <br>
    <br>
    <form method='POST'>
        <label>Quest Title</label><br>
        <input type='text' name='quest'><br><br>

        <label for='level'>Level</label><br>
        <select name='level' id='level'>
            <option value='Easy'>Easy</option>
            <option value='Hard'>Hard</option>
        </select><br><br>

        <label for='zone'>Zone</label><br>
        <select name='zone' id='zone'>
            <?php require 'select.php'; ?>
        </select><br><br>
        <button type='submit'>submit</button><br>

    </form>
    <br><br>
    
    <?php require 'message.php'; ?>

    <form method='GET' action='main.php'>
        <label>Search Quest or zones</label>
        <input type='text' name='search' placeholder='e.g. Amor..'><br><br>
        <button type='submit'>Search🔎</button>
    </form><br>
    <a href='logout.php'>Logout</a><br><br>
    
    <?php 
    // require 'pager.php';
    require 'display.php';
    ?>
</main>
</body>
</html>