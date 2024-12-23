<?php
session_start();
include("../../../code/db.php");

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $heading = strtoupper($_POST['heading']);
    $page_name = ucfirst($_POST['page_name']);
    $description = $_POST['description'];
    $file_title = strtoupper($_POST['file_title']);
    $prise = strtoupper($_POST['prise']);
    $mrp = strtoupper($_POST['mrp']);
    $duration = strtoupper($_POST['duration']);
    $level = strtoupper($_POST['level']);
    $language = strtoupper($_POST['language']);
    $youtube = $_POST['youtube'];

    // Escape all user inputs to prevent SQL Injection
    $heading = mysqli_real_escape_string($conn, $heading);
    $page_name = mysqli_real_escape_string($conn, $page_name);
    $description = mysqli_real_escape_string($conn, $description);
    $file_title = mysqli_real_escape_string($conn, $file_title);
    $prise = mysqli_real_escape_string($conn, $prise);
    $mrp = mysqli_real_escape_string($conn, $mrp);
    $duration = mysqli_real_escape_string($conn, $duration);
    $level = mysqli_real_escape_string($conn, $level);
    $language = mysqli_real_escape_string($conn, $language);
    $youtube = mysqli_real_escape_string($conn, $youtube);

    if (!empty($_FILES['image']['tmp_name'])) {
        $imageFileName = uniqid() . $_FILES['image']['name'];
        $imageFolder = "../../uploads/categories/" . $imageFileName;
        if (move_uploaded_file($_FILES['image']['tmp_name'], $imageFolder)) {
            $imageValue = $imageFileName;
        } else {
            $_SESSION['err'] = "Image move failed. Error: " . $_FILES['image']['error'];
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit();
        }
    } else {
        $imageValue = $_POST['previous_image'];
    }

    $uploadedFiles = [];
    if (isset($_FILES["file"])) {
        foreach ($_FILES["file"]["tmp_name"] as $key => $tempname) {
            $filename = $_FILES["file"]["name"][$key];
            $file = uniqid() . $filename;
            $folder = "../../uploads/categories/" . $file;
            if (move_uploaded_file($tempname, $folder)) {
                $uploadedFiles[] = $file;
            } else {
                echo "File move failed for $filename. Error: " . $_FILES["file"]["error"][$key];
            }
        }
    }

    $update_file_query = "";

    if (!empty($uploadedFiles)) {
        $update_file_query = ", `file` = '" . implode(",", $uploadedFiles) . "'";
    }

    // Corrected SQL query
    $q = "UPDATE `dynamic_pages` SET `heading` = '$heading', `page_name` = '$page_name', `description` = '$description', `file_title` = '$file_title', `prise` = '$prise', `mrp` = '$mrp', `duration` = '$duration', `level` = '$level', `language` = '$language', `youtube` = '$youtube', `image` = '$imageValue'  WHERE `id` = '$id'";
    $res = mysqli_query($conn, $q);

    if ($res) {
        $_SESSION['msg'] = "Data Updated Successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        $_SESSION['err'] = "Some Problem Occurred, Please Try Again After Sometime.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
