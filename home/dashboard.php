<?php
session_start();

$user_id = $_SESSION["user_id"];
?>

<?php include "../includes/header.php"; ?>
<?php include "../includes/navbar.php"; ?>
<?php include "../includes/auth.php"; ?>

<link rel="stylesheet" href="../css/dashboard.css">
<?php require "../includes/db.php"?>

<main>

    <section class="wrapper">
        <section class="welcome">
            <h1>Welcome User! </h1>
        </section>
        <section class="statistics">
            <div class="totaltasks">
                <p>Total Tasks: <?php 

                    
                    $stmt = $conn->prepare("SELECT COUNT(*) AS total FROM tasks WHERE user_id = ?");
                       
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();

                        $result = $stmt->get_result();
                       $row=$result->fetch_assoc();
                       echo $row["total"];
                       ?>
                    </p>
            </p>

            </div>
            <div class="taskstatus">
                <div class="statuscard">
                    <p>Completed Tasks:

                    

                </div>
                <div class="statuscard">
                    <p>Pending Tasks:
                        <?php
                        $status="pending";
                        $stmt = $conn->prepare("SELECT COUNT(*) AS pending FROM tasks WHERE user_id = ? AND task_status=?");
                       
                        $stmt->bind_param("is", $user_id,$status);
                        $stmt->execute();

                        $result = $stmt->get_result();
                       $row=$result->fetch_assoc();
                       echo $row["pending"];
                        
                        ?>
                    </p>

                </div>
                <div class="statuscard">
                    <p>Recent Tasks:<br>
                        <?php
                         $stmt = $conn->prepare("SELECT * FROM tasks WHERE user_id = ? LIMIT 1");
                       
                        $stmt->bind_param("i", $user_id);
                        $stmt->execute();

                        $result = $stmt->get_result();
                       $row=$result->fetch_assoc();
                       echo $row["task_name"];
                        
                        ?>
                    </p>

                </div>
            </div>
        </section>
        <section class="quicklinks">
            <div class="linkbtn">
                <a href="../actions/showtask.php"><button id="showbtn">Show Tasks</button></a>
                <a href="../actions/addtask.php"><button id="addbtn">Add Tasks</button></a>
                <a href="../actions/modifytask.php"><button id="modifybtn">Modify Tasks</button></a>
                <a href="../home/logout.php"><button class="logoutbtn" id="logoutbtn">Logout</button></a>

            </div>
        </section>



    </section>


</main>


<?php include "../includes/footer.php"; ?>