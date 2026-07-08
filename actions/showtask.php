<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/auth.php"; ?>
<link rel="stylesheet" href="../css/showtask.css">
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
            <li class="showdiv">'
                                . $row["task_name"] .
                                '</li>';
                        }
                        ?>
                    </ul>
                </div>

            </div>
        </div>
        <div class="container2">
            <div class="linkbtn">
                <a href="../home/dashboard.php"><button class="dashboardbtn" id="dashboardbtn">Dashboard</button></a>
                <a href="../actions/addtask.php"><button id="addbtn">Add Task</button></a>
                <a href="../actions/modifytask.php"><button id="modifybtn">Modify Task</button></a>
                <a href="../home/logout.php"><button class="logoutbtn" id="logoutbtn">Logout</button></a>
            </div>
        </div>
    </section>

</main>
<?php include "../includes/footer.php"; ?>