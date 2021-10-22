<?php
// include database connection file
include "../../config/koneksi.php";

// Get id from URL to delete that user
$id = $_GET['id'];

// Delete user row from table based on given id
$sql= "DELETE FROM portfolio WHERE id=$id";
$query = mysqli_query($conn, $sql);
if($query){
    // After delete redirect to Home, so that latest user list will be displayed.
    header("Location:portfolio.php");
}
?>