<?php
if(isset($_POST['submit'])){
    $heading = $_POST['heading'];
    $filename = $_FILES["image"]["name"];
    $tempname = $_FILES["image"]["tmp_name"];
    $image = uniqid() . $filename;
    $folder = "../uploads/gallery/" . $image;
    move_uploaded_file($tempname, $folder);

    include("../../code/db.php");

    $q = "INSERT INTO `blog` (`heading`, `image`) VALUES ('$heading',  '$image')";
    $res = mysqli_query($conn, $q);

    if($res){
        echo "<script>alert('Data Inserted Successfully')</script>";
        header("location:../blog.php?msg=1");
    }else{
        echo "<script>alert('Some Problem Occurred, Please Try Again After Sometime.')</script>";
        header("location:../blog.php?msg=1");
    }
} else {
    header("location:../blog.php");
}
?>
