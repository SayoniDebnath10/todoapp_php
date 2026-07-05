<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Tasks</title>
    <link rel="stylesheet" href="deletetask.css">
</head>

<body>

    <div class="container">
        <div class="wrapper">
            <div class="header" id="blink">
                <?php
                require "db.php";
                if (isset($_POST["task_id"])) {
                    $task = $_POST["task_id"];
                    $sql = "DELETE FROM tasks WHERE task_id='$task'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "Task Deleted Successfully!";
                    }
                };


                ?>
            </div>
            <div class="deletebody">
                <div class="addtask">
                    <h2>Add Another Task? Click Here! <a href="index.php"><button id="addbutton">Add Tasks</button></a></h2>
                </div>
                <div class="showtask">
                    <h2>Check Your Tasks? Click Here!
                        <form action="showtask.php" method="GET">
                            <button id="showbtn2">SHOW LIST</button>
                        </form>
                    </h2>


                </div>
            </div>
        </div>
    </div>







</body>

</html>