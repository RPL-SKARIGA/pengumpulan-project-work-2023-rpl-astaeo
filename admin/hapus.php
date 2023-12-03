<?php
include "/xampp/htdocs/kay/admin/koneksi.php";
$id_lagu = $_GET["id_lagu"];

mysqli_query($conn, "DELETE FROM lagu WHERE id_lagu='$id_lagu'");

header("Location:dashboar.php");
