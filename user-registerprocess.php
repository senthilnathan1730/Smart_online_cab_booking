<?php 
include 'dbconnection.php';
if(isset($_POST['register'])){
    $name = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $passwd = $_POST['password'];
   

    $inlog = "INSERT INTO user_register(fullname, email, phone, passwd) VALUES('$name','$email', '$phone', '$passwd')";
    $result = $connec->query($inlog);
    echo $result;

    
if($result == TRUE)
{
    header('Location:user-login.php');
}
else{
    echo "<script>alert('login failed.username and password are incorrect....')</script>";
    echo "error";
}
}


?>