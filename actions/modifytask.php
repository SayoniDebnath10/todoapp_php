<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/auth.php"; ?>
<link rel="stylesheet" href="../css/modifytask.css">
<main>
    <section class="wrapper">

        <div class="container1">
            <div class="subcontainer1">
                <div class="blink" id="showtaskheader">
                    <?php
                    echo "Task List";
                    ?>
                </div>
            </div>
            <div class="subcontainer2">
                <div class="showtask">
                    <ul>
                        <?php
                        require "../includes/db.php";
                        $user_id = $_SESSION["user_id"];

                        $stmt = $conn->prepare("SELECT * FROM tasks WHERE user_id = ? ORDER BY task_id DESC");
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();

                        $result = $stmt->get_result();
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo '
            <li class="showdiv">
            <form action="taskstatus.php" method=POST >
            <input type="hidden" value="' . $row["task_id"] . '" name="task_id">
                 <input type="checkbox" class="checkbox" name="completed" value="1">
                 </form>
                  <span class="taskname">'.$row["task_name"].' </span>
                                <form action="managetask.php" method="POST">
                 <input type="hidden" value="' . $row["task_id"] . '" name="task_id">
                 <button id="deletebtn" class="deletebtn">DELETE</button></form>
                 <form action="updatetask.php" method="POST">
                 <input type="hidden" value="' . $row["task_id"] . '" name="task_id">
                 <button id="updatebtn" class="updatebtn">UPDATE</button></form>
             </li>';
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container2">
            <div class="linkbtn">
                <a href="../home/dashboard.php"><button class="dashboardbtn" id="dashboardbtn">Dashboard</button></a>
                <a href="../actions/addtask.php"><button id="addbtn">Add Tasks</button></a>
                <a href="../home/logout.php"><button class="logoutbtn" id="logoutbtn">Logout</button></a>
            </div>
        </div>
    </section>

</main>
<script src="../js/script.js"></script>
<?php include "../includes/footer.php"; ?>