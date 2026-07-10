<?php
include "../includes/auth.php";
require "../includes/db.php";

if (isset($_POST["taskbox"])) {
    $task = trim($_POST["taskbox"]);
    
    if (empty($task)) {
        echo "<script>
            alert('Please Enter A task!');
            window.location.href='../actions/addtask.php';
          </script>";
        exit();
    } else {

        $stmt = $conn->prepare("SELECT * FROM tasks WHERE task_name=? AND user_id=?");
        $stmt->bind_param("si", $task, $_SESSION["user_id"]);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            echo "<script>
            alert('This Task Exists!');
            window.location.href='../actions/addtask.php';
          </script>";
            exit();
        } else {
            $status="pending";

            $stmt = $conn->prepare("INSERT INTO tasks (user_id,task_name,task_status) VALUES (?,?, ?)");
            $stmt->bind_param("iss", $_SESSION["user_id"], $task,$status);
            if ($stmt->execute()) {
                echo "<script>
            alert('Task added successfully!');
            window.location.href='../actions/addtask.php';
            
          </script>";
                exit();
            } else {
                echo "<script>
            alert('Unable To Add Task!');
            window.location.href='../actions/addtask.php';
            
          </script>";
                exit();
            }
        }
    }
}


if (isset($_POST["updatebox"]) && isset($_POST["task_id"])) {

    $updatedvalue = trim($_POST["updatebox"]);
    $taskid = $_POST["task_id"];

    $stmt = $conn->prepare("UPDATE tasks SET task_name = ? WHERE task_id = ? AND user_id = ?");
    $stmt->bind_param("sii", $updatedvalue, $taskid, $_SESSION["user_id"]);

    if ($stmt->execute()) {

        echo "<script>
            alert('Task Updated Successfully!');
            window.location.href='../actions/modifytask.php';
        </script>";
        exit();

    } else {

        echo "<script>
            alert('Unable to update task!');
            window.location.href='../actions/modifytask.php';
        </script>";
        exit();
    }
}

if (isset($_POST["task_id"])) {

    $taskid = $_POST["task_id"];

    $stmt = $conn->prepare("DELETE FROM tasks WHERE task_id = ? AND user_id = ?");
    $stmt->bind_param("ii", $taskid, $_SESSION["user_id"]);

    if ($stmt->execute()) {

        echo "<script>
            alert('Task Deleted Successfully!');
            window.location.href='../actions/modifytask.php';
        </script>";
        exit();

    } else {

        echo "<script>
            alert('Unable to delete task!');
            window.location.href='../actions/modifytask.php';
        </script>";
        exit();
    }
}