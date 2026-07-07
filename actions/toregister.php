<?php
require "../includes/db.php";
$username=$_POST["username"];
$usermail=$_POST["usermail"];
$userpassword=password_hash($_POST["userpassword"],PASSWORD_DEFAULT);
$stmt=$conn->prepare("INSERT INTO users (user_name,user_mail,user_password) VALUES (?,?,?)");
$stmt->bind_param("sss",$username,$usermail,$userpassword);
if($stmt->execute()){
    header("Location: ../home/login.php");
    exit();
}else{
    header("Location: ../home/register.php");
    exit();
}


?>