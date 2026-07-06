<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Tasks</title>
    <link rel="stylesheet" href="updatetask.css">
</head>

<body>

    <div class="container">
        <div class="wrapper">
            <div class="header" id="blink">

                <?php
                require "db.php";

                if (isset($_POST["updatebox"]) && isset($_POST["task_id"])) {
                    $updatedvalue = $_POST["updatebox"];
                    $taskid = $_POST["task_id"];
                    $sql = "UPDATE tasks SET task_name='$updatedvalue' WHERE task_id='$taskid'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                        echo "Task updated Successfully!";
                    }
                }
                ?>

            </div>
            <div class="updatebody">
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