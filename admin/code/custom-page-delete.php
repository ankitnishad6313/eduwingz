<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location: ../../../login.php");
}
include "../../code/db.php";

if (mysqli_query($conn, "DELETE FROM `custom_pages` WHERE id=' $_GET[id]';")) {
    $_SESSION['msg'] = "Post Deleted Successfully.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {

    $_SESSION['err'] = "Post not Deleted.";
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}