<?php
session_start();
include "../../code/db.php";

$user_id = strtolower(trim($_POST['user_id']));
$pass = md5(trim($_POST['password']));

$fetch = mysqli_query($conn, "SELECT * FROM login WHERE (email='$user_id' OR user_id='$user_id' OR mobile='$user_id') AND password='$pass'");

if (mysqli_num_rows($fetch) > 0) {
    $data = mysqli_fetch_assoc($fetch);
    $_SESSION['full_name'] = $data['full_name'];
    $_SESSION['user_id'] = $data['user_id'];
    $_SESSION['mobile'] = $data['mobile'];
    $_SESSION['email'] = $data['email'];
    $_SESSION['id'] = $data['id'];
    
    header("Location: ../index.php");
    exit; // Ensure no further script execution
} else {
    $_SESSION['err'] = 'Invalid UserId or Password.';
    header("Location: ../../login.php");
    exit; // Ensure no further script execution
}

mysqli_close($conn);
?>
