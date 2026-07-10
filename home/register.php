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
<link rel="stylesheet" href="../css/register.css">

<main>

    <section class="wrapper">

        <div>
            <form class="registerform" action="../actions/toregister.php" method="POST">
                <div class="grid" class="form">
                    <label for="username">Name</label>
                    <input type="text" id="username" name="username" placeholder="Enter Your Name">
                </div>
                <div class="grid" class="form">

                    <label for="usermail">Email</label>

                    <input type="email" id="usermail" name="usermail" placeholder="Enter Your Email Address">
                </div>
                <div class="grid" class="form">
                    <label for="userpassword">Password</label>
                    <input type="password" id="userpassword" name="userpassword" placeholder="Enter A Strong Password">
                </div>
                <div class="grid" class="form">
                    <button type="submit" class="registerbtn" >Register</button>
                </div>
            </form>
        </div>
    </section>


</main>


<?php include "../includes/footer.php"; ?>