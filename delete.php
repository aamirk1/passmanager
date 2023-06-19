<?php
include "conn.php";
$id = $_GET['id'];

session_start();

if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
    $sql = "DELETE FROM `pass_details` WHERE id = $id";
    $results= mysqli_query($conn,$sql);
    if ($results) {
        header("location:home.php?msg=Data Deleted successfully");
    }else {
        echo "Failed " . mysqli_error($conn);
    }
}else{
    header("Location: index.php");
    exit();
}
?>