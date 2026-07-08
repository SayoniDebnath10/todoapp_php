<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
} ?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<link rel="stylesheet" href="../css/about.css">

<main>
    <section class="wrapper">

        <h1>About Us</h1>
        <div class="about-box">

            <h3>Welcome to To Do App!</h3>

            <p>This application is designed to help users organize and manage their daily tasks in a simple and efficient way. Users can create an account, securely log in, add new tasks, update existing tasks, and remove completed or unnecessary tasks.

                Our goal is to provide a clean, user-friendly, and reliable task management experience that helps users stay organized and improve productivity.</p>

            <p><strong>Thank you for using our To Do App!</strong></p>
        </div>
    </section>



</main>

<?php include "../includes/footer.php"; ?>