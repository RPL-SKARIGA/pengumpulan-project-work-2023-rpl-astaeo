<?php
include "koneksi.php";
$nama_lagu = $_POST["nama_lagu"];
$id_genre = $_POST["id_genre"];
$id_artis = $_POST["id_artis"];
$old = ["'", "<p>", " "];
$new = ["", "<p class=\"chordd\">", "&nbsp;"];

$old_filter = ["", "<p&nbsp;class", "<p class"];
$lirik = str_replace($old, $new, $_POST["lirik"]);
$lirik_asli = str_replace("<p&nbsp;class", "<p class", $lirik);
//==================================================
// $lirik = str_replace("'", "", $_POST["lirik"]);
// $lirik = str_replace("<p>", "", $_POST["lirik"]);
// $lirik = str_replace(" ", "&nbsp;", $_POST["lirik"]);
// $lirik = str_replace("</p>", "", $_POST["lirik"]);
//==================================================
// $old = ["'", "<p>", " "];
// $new = ["", "", "&nbsp;"];
// $lirik = str_replace($old, $new, $_POST["lirik"]);


mysqli_query($conn, "INSERT INTO `lagu` (`id_lagu`, `judul_lagu`, `id_artis`, `id_kategori`, `chord`) VALUES (NULL, '$nama_lagu', '$id_artis', '$id_genre', '$lirik_asli')");
header("Location: ./listlagu.php");
