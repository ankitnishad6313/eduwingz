<?php
session_start();
if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $pagename = $_POST['pagename'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $image = $_FILES["image"]["name"];
    $image_tmp_name = $_FILES["image"]["tmp_name"];

    include "../../code/db.php";

    $q = "UPDATE `custom_pages` SET `pagename`='$pagename',`heading`='$heading',`description`='$description' WHERE id = $id";
    $res = mysqli_query($conn, $q);

    if ($res) {
        if (!empty($image)) {
            $target_dir = "../uploads/custom_pages/";
            $unique_id = uniqid();
            $timestamp = time();
            $image_extension = pathinfo($image, PATHINFO_EXTENSION);
            $new_image_name = $unique_id . '_' . $timestamp . '.' . $image_extension;
            $target_file = $target_dir . $new_image_name;
            if (move_uploaded_file($image_tmp_name, $target_file)) {
                $q_image = "UPDATE `custom_pages` SET `image`='$new_image_name' WHERE `id`='$id'";
                $res_image = mysqli_query($conn, $q_image);

                if ($res_image) {
                    $_SESSION['msg'] = "Data and Image Updated Successfully!!";
                } else {
                    $_SESSION['msg'] = "Data Updated, but Image Not Saved!!";
                }
            } else {
                $_SESSION['msg'] = "Data Updated, but Image Not Updated!!";
            }
        } else {
            $_SESSION['msg'] = "Data Updated Successfully!!";
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['err'] = "Data not Updated!!";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
