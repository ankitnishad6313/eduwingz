<?php
session_start();
if(isset($_POST['submit'])){
    $heading = $_POST['heading'];
    $description = $_POST['description'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $image = uniqid() . $filename;
    $folder = "../uploads/gallery/" . $image;
    move_uploaded_file($tempname, $folder);

    include("../../code/db.php");

    $q = "INSERT INTO `interview` (`heading`, `description`, `image`) VALUES ('$heading', '$description', '$image')";
    $res = mysqli_query($conn, $q);

    if($res){
        echo "<script>alert('Data Inserted Successfully')</script>";
        header("location:../interview.php?msg=1");
    }else{
        echo "<script>alert('Some Problem Occurred, Please Try Again After Sometime.')</script>";
        header("location:../interview.php?msg=1");
    }
} else {
    header("location:../interview.php");
}
?>
