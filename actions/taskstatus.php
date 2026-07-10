<?php
session_start();
include "../includes/db.php";

$task_id = $_POST["task_id"];

$status = isset($_POST["completed"]) ? "completed" : "pending";

$stmt = $conn->prepare("
    UPDATE tasks
    SET task_status = ?
    WHERE task_id = ? AND user_id = ?
");

$stmt->bind_param("sii", $status, $task_id, $_SESSION["user_id"]);
$stmt->execute();

header("Location: ../actions/modifytask.php");
exit();