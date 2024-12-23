<?php 
session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location: ../../../login.php");
    exit();
}

require "../../../code/db.php";

$pass = trim($_POST['password']);
$cpass = trim($_POST['cpassword']); 
$id = $_SESSION['id'];


if ($pass !== $cpass) {
    $_SESSION['err'] = 'Passwords do not match.';
    header("Location: ../../index.php");
    exit();
}

$hashedPassword = md5($pass);

$sql = "UPDATE login SET password='$hashedPassword' WHERE id='$id'";
if(mysqli_query($conn, $sql)) {
    $_SESSION['msg'] = 'Password Change Successful.';
} else {
    $_SESSION['err'] = 'Password Not Change.';
}

header("Location: ../../index.php");
exit();
?>
