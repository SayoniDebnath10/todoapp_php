<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<link rel="stylesheet" href="../css/addtask.css">

<main>
    <section class="wrapper">
        <div class="container">
            <div class="subcontainer1">
                <h1>Welcome To Our To-Do-List!</h1>
                <h3>Note Your Tasks</h3>
            </div>
            <div class="subcontainer2">
                    <form action="../actions/managetask.php" method="POST">
                        <input type="text" id="taskbox" name="taskbox" placeholder="enter your tasks!">
                        <button type="submit" id="addbtn">ADD</button>
                    </form>
            </div>
        </div>
    </section>
    <section>
        <div class="container">
            <h2>Check Your Tasks? Click Here!
                <form action="showtask.php" method="GET">
                    <button id="showbtn">SHOW LIST</button>
                </form>
            </h2>
        </div>
    </section>
</main>

<?php include "../includes/footer.php"; ?>