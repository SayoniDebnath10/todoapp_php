<?php
require "../includes/db.php";
$username = trim($_POST["username"]);
$usermail = trim($_POST["usermail"]);
$userpassword = trim($_POST["userpassword"]);

if (empty($username) || empty($usermail) || empty($userpassword)) {

    echo "<script>
            alert('Please fill all the fields!');
            window.location.href='../home/register.php';
          </script>";
    exit();
}
$stmt = $conn->prepare("SELECT * FROM users WHERE user_mail = ?");
$stmt->bind_param("s", $usermail);
$stmt->execute();

$result = $stmt->get_result();

if ($result->num_rows > 0) {
    header("Location: ../home/register.php");
    exit();
} else {
$userpassword=password_hash($userpassword,PASSWORD_DEFAULT);
$stmt=$conn->prepare("INSERT INTO users (user_name,user_mail,user_password) VALUES (?,?,?)");
$stmt->bind_param("sss",$username,$usermail,$userpassword);
if($stmt->execute()){

 echo "<script>
            alert('Registered successfully!');
            window.location.href='../home/login.php';
            
          </script>";
            exit();
}else{
 echo "<script>
             alert('Registration Failed, Try Again!');
            window.location.href='../home/register.php';
           
          </script>";
            exit();

}
}
?>