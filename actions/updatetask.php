<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/auth.php"; ?>
<link rel="stylesheet" href="../css/updatetask.css">

<?php
require "../includes/db.php";
if (isset($_POST["task_id"])) {
    $taskid = $_POST["task_id"];
}

?>
<main>
    <section class="wrapper">
        <div class="container1">
            <div class="updateheader" id="blink">
                <h3>Change Your Task</h3>

            </div>
        </div>
        <div class="container2">

            <form method="POST" action="../actions/managetask.php">
                <input type="text" id="updatebox" name="updatebox" autofocus placeholder="enter new task!">
                <input type="hidden" name="task_id" value=<?php echo $taskid ?>>
                <button type="submit" id="updatebtn">UPDATE</button>
            </form>
        </div>
    </section>
</main>




<?php include "../includes/footer.php"; ?>