<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location: ../../../login.php");
}
    include "../../../code/db.php";

    if(mysqli_query($conn,"DELETE FROM `placement` WHERE id='$_GET[id]';"))
    {
        $_SESSION['msg'] = "placement Delete Successfull.";
        header("Location: ../../placement.php");
    }
    else{

        $_SESSION['err']=" placement Not Delete .";
        header("Location:../../placement.php");
    }
?>