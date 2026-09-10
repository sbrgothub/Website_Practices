<?php
session_start();
require 'db.php';
$error=['Enter New account details to signup<br>Enter existing account detail to login','green'];
if (isset($_SESSION['error_post'])){
    $error=$_SESSION['error_post'];
    unset($_SESSION['error_post']);
}

if (isset($_POST['username']) and isset($_POST['password'])){
    if ($_POST['username']!='' and $_POST['password']!=''){
        $error=['Fill complete details','red'];
        $flag=0;
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql_log='select * from users where username=:user';
        $stm_log=$pdo->prepare($sql_log);
        $stm_log->execute([
            ':user'=>$username
        ]);

        $fet_log=$stm_log->fetchAll(PDO::FETCH_ASSOC);

        foreach($fet_log as $usr){
            $cond_1= password_verify($password,$usr['password_hash']);
            $cond_2= $username==$usr['username'];
            if ($cond_1 and $cond_2){
                $flag=11;
                $_SESSION['loggedin']=true;
                $_SESSION['user']=$username;
                header('Location: main.php');
                exit;
            }
            else{
                $flag=1;
                $error=['Username already taken','red'];
                break;
            }
        }
        if ($flag==0){
            //need a message box shows are u sure want to submit if yes then execute below. if no then dont
            $_SESSION['username']=$username;
            $_SESSION['password']=$password;
            header('Location: signup.php');
            exit;
        }
    }
    else{
        $error=['Fill all details','red'];
    }
}

?>

<form method='POST' action='login.php'>
    <label>Username:</label>
    <input type='text' name='username'><br><br>

    <label>Password:</label>
    <input type='password' name='password'><br><br>
    
    <button type='submit'>Login/Sign up</button><br><br>
    <p style='color: <?php echo $error[1]; ?>'><?php echo $error[0]; ?></p>
</form>