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
                    <button type="submit" id="loginbtn">Login</button>
                </div>
            </form>
        </div>
    </section>


</main>


  <?php include "../includes/footer.php"; ?>