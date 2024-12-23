<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $pdf=$_FILES['pdfFile']['name'];
    $tmp_pdf=$_FILES['pdfFile']['tmp_name'];

    include("_db.php");

    $sql = "INSERT INTO placement(name, email, phone, subject, message ,pdf) VALUES('$name', '$email', '$mobile', '$subject', '$message','$pdf')";
    $res = mysqli_query($conn, $sql);

    if($res){
        move_uploaded_file($tmp_pdf, "uploads/".$pdf);
        header("location:place.php?msg=1");
    }else{
        header("location:place.php?msg=1");
    }
}else{
    header("location:place.php");
}

?>