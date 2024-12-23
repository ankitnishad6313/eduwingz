<?php
session_start();
if (isset($_POST['submit'])) {
    $pagename = $_POST['pagename'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $image = $_FILES["image"]["name"];
    $image_name = $_FILES["image"]["tmp_name"];

    include ("../../code/db.php");

    $q = "INSERT INTO `custom_pages`(`pagename`, `heading`, `description`) VALUES ('$pagename', '$heading', '$description')";
    $res = mysqli_query($conn, $q);

    if ($res) {
        if (!empty($image)) {
            $target_dir = "../uploads/custom_pages/";
            $unique_id = uniqid();
            $timestamp = time();
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);
            $new_image_name = $unique_id . '_' . $timestamp . '.' . $image_extension;
            $target_file = $target_dir . $new_image_name;
            if (move_uploaded_file($image_name, $target_file)) {

                $page_id = mysqli_insert_id($conn);
                $q_image = "UPDATE `custom_pages` SET `image`='$new_image_name' WHERE `id`='$page_id'";
                $res_image = mysqli_query($conn, $q_image);

                if ($res_image) {
                    $_SESSION['msg'] = "Data and Image Uploaded Successfully!!";
                } else {
                    $_SESSION['msg'] = "Data Uploaded, but Image Not Saved!!";
                }
            } else {
                $_SESSION['msg'] = "Data Uploaded, but Image Not Uploaded!!";
            }
        } else {
            $_SESSION['msg'] = "Data Uploaded Successfully!!";
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['err'] = "Data not Uploaded!!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>