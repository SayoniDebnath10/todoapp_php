 <?php
    session_start();
    include "../includes/auth.php";


    require "../includes/db.php";
    $user_id = $_SESSION["user_id"];

    $stmt = $conn->prepare("DELETE FROM users WHERE user_id=(?)");
    $stmt->bind_param("i", $user_id);
    $result = $stmt->execute();
    if ($result) {
        session_destroy();
        header("Location: ../home/index.php");
        exit();
    }
    ?>
