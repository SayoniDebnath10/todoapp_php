  <?php
  session_start();

require "../includes/db.php";

if (isset($_SESSION["user_id"])) {
    header("Location: ../home/dashboard.php");
    exit();
}

$usermail=$_POST["usermail"];
$stmt=$conn->prepare("SELECT * FROM users WHERE user_mail=?");
$stmt->bind_param("s",$usermail);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();
if($row && password_verify($_POST["userpassword"],$row["user_password"])){
    session_regenerate_id(true);   
    $_SESSION["user_id"]=$row["user_id"];
    $_SESSION["user_name"]=$row["user_name"];

    echo "<script>
            alert('Login Successful!');
            window.location.href='../home/dashboard.php';
            
          </script>";
            exit();
}
else{
   echo "<script>
             alert('Login Failed, Try Again!');
            window.location.href='../home/login.php';
           
          </script>";
            exit(); 
}


?>
