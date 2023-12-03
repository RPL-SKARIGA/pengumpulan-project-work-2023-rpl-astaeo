<?php
    $servername = "localhost"; 
    $username = "root"; 
    $password = ""; 
    $database = "ascho";    
    
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die("Semangat Ini Masih Gagal : " . mysqli_connect_error());
    } else {
        echo"";
    }
?>