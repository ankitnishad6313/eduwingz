<?php
$servername = "localhost";
$username = "root";
$password ="";
$db ="eduwingz";

$conn = mysqli_connect($servername,$username,$password,$db);

if(!$conn)
{
    die("Error: ".$conn->connect_error);
}
?>