<?php
session_start();
if(isset($_POST['submit'])){
    $heading = $_POST['heading'];
	$description = $_POST['description'];
    include("../../code/db.php");

    $q = "INSERT INTO `grammar`(`heading`, `description`) VALUES ('$heading',  '$description')";
    $res = mysqli_query($conn, $q);

    if($res){
        $_SESSION['msg'] = "Data Uploaded Successfully!!";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['err'] = "Data not Uploaded!!";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

