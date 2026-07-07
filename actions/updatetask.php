<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<link rel="stylesheet" href="../css/updatetask.css">

    <?php
    require "../includes/db.php";
    if (isset($_POST["task_id"])) {
        $taskid = $_POST["task_id"];
    }

    ?>



    <div class="container">
        <div class="wrapper">
            <div class="header" id="blink">
                <h3>Change Your Task</h3>

            </div>
            <div class="updatebox">

                <form method="POST" action="../actions/managetask.php">
                    <input type="text" id="updatebox2" name="updatebox" placeholder="enter new task!">
                    <input type="hidden" name="task_id" value=<?php echo $taskid ?>>
                    <button type="submit" id="updatebtn2">UPDATE</button>
                </form>

            </div>





        </div>

    </div>

<?php include "../includes/footer.php"; ?>