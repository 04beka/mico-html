<?php
session_start();
include 'users.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $password = $_POST['password'];

    foreach ($users as $user) {
        if ($user['id'] === $id && $user['password'] === $password) {
            $_SESSION['user'] = $id;
            header("Location: index.php?login=success");
            exit;
        }
    }

    header("Location: index.php?login=fail");
    exit;
}
?>
