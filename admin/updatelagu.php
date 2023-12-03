<?php
include "koneksi.php";
$id_lagu = $_POST["id_lagu"];
$nama_lagu = $_POST["nama_lagu"];
$id_genre = $_POST["id_genre"];
$id_artis = $_POST["id_artis"];
$old = ["'", "<p>", " "];
$new = ["", "<p class=\"chordd\">", "&nbsp;"];

$old_filter = ["", "<p&nbsp;class", "<p class"];
$lirik = str_replace($old, $new, $_POST["lirik"]);
$lirik_asli = str_replace("<p&nbsp;class", "<p class", $lirik);

mysqli_query($conn, "UPDATE `lagu` SET judul_lagu='$nama_lagu', id_artis='$id_artis', id_kategori='$id_genre', chord='$lirik_asli' WHERE id_lagu='$id_lagu'");
header("Location: ./listlagu.php");
