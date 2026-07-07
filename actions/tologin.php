<?php
require "../includes/db.php";

$usermail=$_POST["usermail"];
$stmt=$conn->prepare("SELECT * FROM users WHERE user_mail=?");
$stmt->bind_param("s",$usermail);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();
if(password_verify($_POST["userpassword"],$row["user_password"])){
    header("Location: ../home/dashboard.php");
}else{
    header("Location: ../home/login.php");
}


?>
