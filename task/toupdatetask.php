<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="toupdatetask.css">
</head>

<body>

    <?php
    require "db.php";
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

                <form method="POST" action="updatetask.php">
                    <input type="text" id="updatebox2" name="updatebox" placeholder="enter your tasks!">
                    <input type="hidden" name="task_id" value=<?php echo $taskid ?>>
                    <button type="submit" id="updatebtn2">UPDATE</button>
                </form>

            </div>





        </div>

    </div>



</body>

</html>