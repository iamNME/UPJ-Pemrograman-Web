<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mydb_upjportfolio";

    // koneksi ke database
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // cek koneksi
    if(!$conn){
        die('Connection Failed');
    }
    // else{
    //     echo "Connection Success";
    // }
?>