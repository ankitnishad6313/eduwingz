<?php
session_start();
if(isset($_POST['submit'])){
	$id = $_POST['id'];
    $heading = $_POST['heading'];
	$description = $_POST['description'];
    include("../../../code/db.php");

    $q = "UPDATE `grammar` SET heading='$heading', description='$description' WHERE id = '$id'";
    $res = mysqli_query($conn, $q);

    if($res){
        $_SESSION['msg'] = "Data Updated Successfully!!";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['err'] = "Data not Updated!!";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}
?>
