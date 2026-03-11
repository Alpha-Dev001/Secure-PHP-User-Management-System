<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header('Location: admin.php');
    exit();
}

include 'connection.php';

$user_id = $_GET['id'];

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($user_id)) {
    $sql = "DELETE FROM users WHERE id = $user_id";
    
    if ($conn->query($sql)) {
        header('Location: dashboard.php?deleted=true');
        exit();
    } else {
        header('Location: dashboard.php?error=true');
        exit();
    }
} else {
    header('Location: dashboard.php');
    exit();
}
?>
