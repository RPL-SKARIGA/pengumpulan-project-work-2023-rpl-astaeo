<?php
include "./header.php";

$artist = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM artis"));
$genre = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM genre"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Pianasta || Admin</title>
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
</head>
<style>
    .double-spacing {
        line-height: 30;
    }

    input[type=text] {
        width: 100%;
        border: 2px solid black;
        border-radius: 4px;
        padding: 6px 8px;
    }

    .add-button {
        display: block;
        background-color: #05ada2;
        color: #fff;
        text-decoration: none;
        padding: 5px 20px;
        border-radius: 5px;
        text-align: center;
    }
</style>

<body class="body">
    <div style="align-items:center;">
        <form action="prosesinsertartis.php" method="post">
            <label for="artis">Nama Artis</label>
            <input type="text" name="artis" />
            <button type="submit" class="add-button">Tambah Artis</button>
        </form>
    </div>
</body>

</html>