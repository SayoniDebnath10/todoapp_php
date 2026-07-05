<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Task</title>
    <link rel="stylesheet" href="addtask.css">
</head>

<body>
    <div id="add">
        <div id="addhead">
            <div class="blink" id="add1">
                <?php
                require "db.php";

                if (isset($_POST["taskbox"])) {
                    $task = $_POST["taskbox"];

                    $sql = "INSERT INTO tasks(task_name) VALUES ('$task')";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "Task Added!";
                    }
                };
                ?>
            </div>


            <div id="add2">
                <div id="add3">
                    <h2>Add Another Task? Click Here! <a href="index.php"><button id="addbutton">Add Tasks</button></a></h2>
                </div>
                <div id="add4">
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