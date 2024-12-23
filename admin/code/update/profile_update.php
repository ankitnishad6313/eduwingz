<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION['user_id'])) {
    require_once "../../../code/db.php";
    $id = $_POST['id'];
    $full_name = $_POST['full_name'];
    $user_id = $_POST['user_id'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
        $image_name = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];
        $image_path = "../../uploads/profile/" . $image_name;
        move_uploaded_file($image_temp, "../../uploads/profile/" . $image_name);
        $sql = "UPDATE login SET full_name='$full_name', user_id='$user_id', email='$email', mobile='$mobile', image='$image_path' WHERE id='$id'";
    } else {
        $sql = "UPDATE login SET full_name='$full_name', user_id='$user_id', email='$email', mobile='$mobile' WHERE id='$id'";
    }
    if (mysqli_query($conn, $sql)) {
        $_SESSION['msg'] = 'Profile updated successfully.';
    } else {
        $_SESSION['err'] = 'Error updating profile: ' . mysqli_error($conn);
    }
    mysqli_close($conn);
    header("Location: ../../profile.php");
    exit();
} else {
    header("Location: ../../../login.php");
    exit();
}