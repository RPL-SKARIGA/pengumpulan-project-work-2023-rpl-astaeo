<?php
session_start();

require '../koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM admin WHERE email = '$email' AND  password ='$password'";
$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    $userdata = mysqli_fetch_assoc($result);
    $_SESSION["email"] = $userdata['email'];
    header("Location: ../index.php");
} else {
    echo "maaf password salah";
}
