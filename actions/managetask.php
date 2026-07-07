<?php
require "../includes/db.php";

if (isset($_POST["taskbox"])) {
    $task = trim($_POST["taskbox"]);
    $stmt = $conn->prepare("INSERT INTO tasks (task_name) VALUES (?)");
    $stmt->bind_param("s", $task);
    if ($stmt->execute()) {
        header("Location: ../actions/addtask.php");
        exit;
    } else {
        header("Location: ../home/login.php");
        exit;
    }
};

if (isset($_POST["updatebox"]) && isset($_POST["task_id"])) {
                    $updatedvalue = $_POST["updatebox"];
                    $taskid = $_POST["task_id"];
                    $sql = "UPDATE tasks SET task_name='$updatedvalue' WHERE task_id='$taskid'";
                    $result = mysqli_query($conn, $sql);
                    if ($result) {
                         header("Location: ../actions/modifytask.php");
                         exit;
                        
                    }
                }

if (isset($_POST["task_id"])) {
    $task = $_POST["task_id"];
    $sql = "DELETE FROM tasks WHERE task_id='$task'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: ../actions/modifytask.php");
        exit;
    } else {

        header("Location: ../actions/showtask.php");
        exit;
    }
};
