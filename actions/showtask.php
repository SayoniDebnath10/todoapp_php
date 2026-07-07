<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
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
                        $sql = "SELECT * FROM tasks ORDER BY task_id DESC";
                        $result = mysqli_query($conn, $sql);
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
                <a href="../home/dashboard.php"><button id="dashboardbtn">DASHBOARD</button></a>
                <a href="../actions/addtask.php"><button id="addbtn">ADD TASK</button></a>
                <a href="../home/logout.php"><button id="logoutbtn">LOGOUT</button></a>
            </div>
        </div>
    </section>

</main>
<?php include "../includes/footer.php"; ?>