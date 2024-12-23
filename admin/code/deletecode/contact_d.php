<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location: ../../../login.php");
}
    include "../../../code/db.php";

    if(mysqli_query($conn,"DELETE FROM `contact` WHERE id='$_GET[id]';"))
    {
        $_SESSION['msg']=" contact Delete Successfull.";
        header("Location: ../../contact.php");
    }
    else{

        $_SESSION['err']=" contact Not Delete .";
        header("Location:../../contact.php");
    }
?>