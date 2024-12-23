<?php
session_start();
if (!isset($_SESSION['user_id']) || !isset($_SESSION['full_name']) || !isset($_SESSION['email']) || !isset($_SESSION['mobile']) || !isset($_SESSION['id'])) {
    header("Location: ../../../login.php");
}
    include "../../../code/db.php";

    if(mysqli_query($conn,"DELETE FROM `interview` WHERE id='$_GET[id]';"))
    {
        $_SESSION['msg']=" interview Delete Successfull.";
        header("Location: ../../interview.php");
    }
    else{

        $_SESSION['err']=" interview Not Delete .";
        header("Location:../../interview.php");
    }
?>