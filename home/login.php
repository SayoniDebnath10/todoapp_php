<?php
 if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } 
 if (isset($_SESSION["user_id"])) {
    header("Location: ../home/dashboard.php");
    exit();
}
?>

<?php include "../includes/header.php"; ?>
 <?php include "../includes/navbar.php"; ?>
 <link rel="stylesheet" href="../css/login.css">



 <main>

    <section class="wrapper">

        <div>
            <form class="loginform" action="../actions/tologin.php" method="POST">
                <div class="grid">

                    <label for="usermail">Email</label>

                    <input type="email" id="usermail" name="usermail" placeholder="Enter Your Email Address">
                </div>
                <div class="grid">
                    <label for="userpassword">Password</label>
                    <input type="password" id="userpassword" name="userpassword" placeholder="Enter Your Password">
                </div>
                <div class="grid">
                    <button type="submit" class="loginbtn">Login</button>
                </div>
            </form>
        </div>
    </section>


</main>


  <?php include "../includes/footer.php"; ?>