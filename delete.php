<?php
include_once("config.php");
 
$id = $_GET['id'];
 
$result = mysqli_query($conn, "DELETE FROM iest WHERE id=$id");
 
header("Location:index.php");
?>