<?php
session_start();
include("../../../code/db.php");
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $edit_file = $_POST['edit_file'];


    if(isset($_FILES["file"]["name"]) && !empty($_FILES["file"]["name"])) {
        $filename = $_FILES["file"]["name"];
        $tempname = $_FILES["file"]["tmp_name"];
        $file = uniqid() . $filename;
        $folder = "../uploads/categories/" . $file;
        move_uploaded_file($tempname, $folder);


        $update_file_query = ", `file` = '$file'";
    } else {
        $update_file_query = "";
    }

    // Construct the update query
    $q = "UPDATE `spallation` SET `heading` = '$heading', `description` = '$description' $update_file_query WHERE `id` = $id";
    $res = mysqli_query($conn, $q);

    if($res){
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
