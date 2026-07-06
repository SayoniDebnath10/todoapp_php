<?php
require "../includes/db.php";

if (isset($_POST["taskbox"])) {
    $task = $_POST["taskbox"];
    $stmt = $conn->prepare("INSERT INTO tasks (task_name) VALUES (?)");
    $stmt->bind_param("s", $task);
    $stmt->execute();
    if ($stmt->execute()) {
        header("Location: ../home/dashboard.php");
    } else {
        header("Location: ../home/login.php");
    }
};
?>
