<?php
session_start();

if (isset($_POST['submit'])) {
    include("../../code/db.php");

    $images = array();
    $errors = array();


    foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
        $filename = $_FILES["image"]["name"][$key];
        $tempname = $_FILES["image"]["tmp_name"][$key];
        $image = uniqid() . $filename;
        $folder = "../uploads/gallery/" . $image;
        if (move_uploaded_file($tempname, $folder)) {
            $images[] = $image;
        } else {
            $errors[] = "Failed to upload $filename";
        }
    }

    if (!empty($images)) {
        foreach ($images as $image) {
            $q = "INSERT INTO `gallery` (`image`) VALUES ('$image')";
            $res = mysqli_query($conn, $q);
            if (!$res) {
                $errors[] = "Failed to insert image $image into database";
            }
        }

        if (empty($errors)) {
            $_SESSION['msg'] = "All images uploaded and inserted successfully";
			header('Location: ' . $_SERVER['HTTP_REFERER']);
        } else {
            $_SESSION['err'] = implode("<br>", $errors);
			header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    } else {
        $_SESSION['err'] = "No images uploaded";
		header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
} else {
    $_SESSION['err'] = "Form submission error";
	header('Location: ' . $_SERVER['HTTP_REFERER']);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
