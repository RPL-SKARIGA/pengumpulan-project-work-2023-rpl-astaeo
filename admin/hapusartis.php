<?php
include "/xampp/htdocs/kay/admin/koneksi.php";
$id_artis = $_GET["id_artis"];

mysqli_query($conn, "DELETE FROM artis WHERE id_artis=$id_artis");

header("Location:dashboar.php");
