<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Tasks</title>
    <link rel="stylesheet" href="showtask.css">
</head>

<body>
    <div class="container">




        <div class="showbox">
            <div class="head">
                <div class="blink" id="showtaskheader">
                    <?php
                    echo "Task List";
                    ?>
                    </div>
                    <div class="showtask">


                        <ul>
                            <?php

                            require "db.php";
                            $sql = "SELECT * FROM tasks ORDER BY id DESC";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '
            <li class="showdiv">'
                                    . $row["task_name"] .
                                    '<form action="deletetask.php" method="POST">
                 <input type="hidden" value="' . $row["task_id"] . '" name="task_id">
                 <button id="deletebtn">DELETE</button></form>
                 <form action="toupdatetask.php" method="POST">
                 <input type="hidden" value="' . $row["task_id"] . '" name="task_id">
                 <button id="updatebtn">UPDATE</button></form>
             </li>';
                                echo "<br>";
                            }
                            ?>
                        </ul>
                    </div>

                </div>



                <h2>Add Another Task? Click Here! <a href="index.php"><button id="addbutton">Add Tasks</button></a></h2>
            </div>


        </div>

</body>

</html>