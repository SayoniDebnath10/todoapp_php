  <?php
  session_start();

require "../includes/db.php";

if (isset($_SESSION["user_id"])) {
    header("Location: ../home/dashboard.php");
    exit();
}
if (empty(trim($_POST["usermail"])) || empty(trim($_POST["userpassword"]))) {
    echo "<script>
            alert('Please enter both Email and Password!');
            window.location.href='../home/login.php';
          </script>";
    exit();
}

$usermail=trim($_POST["usermail"]);
$userpassword=trim($_POST["userpassword"]);
$stmt=$conn->prepare("SELECT * FROM users WHERE user_mail=?");
$stmt->bind_param("s",$usermail);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();
if($row && password_verify($userpassword,$row["user_password"])){
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
