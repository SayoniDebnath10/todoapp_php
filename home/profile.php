<?php
session_start();
require "../includes/db.php"; 

$user_id = $_SESSION["user_id"];

$stmt = $conn->prepare("SELECT user_name, user_mail FROM users WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();

$result = $stmt->get_result();
$userdata = $result->fetch_assoc();
?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/auth.php"; ?>

<link rel="stylesheet" href="../css/profile.css">
<?php require "../includes/db.php" ?>

 <main>
    <form action="../actions/deleteaccount.php" method=POST>
    <section class="wrapper">
        <h1>Profile Details</h1>
        <div class="container">
        <h3>Name: <?php echo $userdata["user_name"]?></h3>
       <h3> Email: <?php echo $userdata["user_mail"]?></h3>
        </div>
        
        <button type="submit" id="deleteaccountbtn" name="deleteaccountbtn">DELETE ACCOUNT</button>
        

    </section>
    </form>
 </main>
 <script src="../js/script.js"></script>
<?php include "../includes/footer.php"; ?>