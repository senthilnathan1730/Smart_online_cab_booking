<?php session_start();
include 'dbconnection.php';
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $inlog = "select * from user_register where email = '$email' and passwd = '$pass'";
    $res = mysqli_query($connec, $inlog);
    $row = mysqli_fetch_array($res);

    $email=$row['email'];
    $count = mysqli_num_rows($res);
    $pass=$row['passwd'];
    if($count == 0)
    {
        echo "<script>alert('login failed.username and password are incorrect....')</script>";
        header('Location:user-login.php');

    }
    else{
        $_SESSION['email'] = $email;
        $_SESSION['passwd'] = $pass;
        header('Location:user-dashboard.php');
        
    }
    }
    
?>