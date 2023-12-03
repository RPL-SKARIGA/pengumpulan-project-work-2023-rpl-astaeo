<?php
include "koneksi.php";
$nama_artis = $_POST["artis"];

mysqli_query($conn, "INSERT INTO `artis` (`id_artis`, `nama_artis`) VALUES (NULL, '$nama_artis')");
header("Location: ./listartis.php");
