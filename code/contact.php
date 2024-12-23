<?php
session_start();
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    include("db.php");

    $sql = "INSERT INTO contact(name, email, mobile, subject, message) VALUES('$name', '$email', '$mobile', '$subject', '$message')";
    $res = mysqli_query($conn, $sql);

    if($res){
        $_SESSION['msg'] = "Data Inserted Successfully";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }else{
        $_SESSION['err'] = "Some Problem Occurred, Please Try Again After Sometime.";
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}else{
    header("location:contact.php");
}

?>