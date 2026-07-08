   <?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } ?>
   
   <?php include "../includes/header.php" ; ?>
   <?php include "../includes/navbar.php" ; ?>
   <link rel="stylesheet" href="../css/index.css">
   <main>
        <section class="wrapper">
            <h1>Manage Your Daily Tasks With Us</h1>
            <div class="introdiv">
                <?php
                if (!isset($_SESSION["user_id"])) {
                ?>
                <div>
                    <p>Don't have an account?</p>
                    <a href="register.php"><button class="registerbtn" >
                            Signup
                        </button></a>

                </div>
                <div>
                    <p>Have an account?</p>
                    <a href="login.php"><button class="registerbtn">
                            login
                        </button></a>

                </div>
            <?php }else{ ?>

            <h3>You're Already Logged In!</h3>
            <?php } ?>
            </div>

        </section>


    </main>
    <?php include "../includes/footer.php" ; ?>

   