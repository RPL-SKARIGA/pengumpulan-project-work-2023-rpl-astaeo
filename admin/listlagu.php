<?php include "./header.php";

$query = mysqli_query($conn, "SELECT lagu.id_lagu, lagu.judul_lagu as judul_lagu, genre.nama_genre as nama_genre, artis.nama_artis as nama_artis FROM lagu JOIN genre ON genre.id_kategori = lagu.id_kategori INNER JOIN artis ON artis.id_artis = lagu.id_artis");
?>
<div class="wrap">
    <a class="add-button" href="dashboar.php">Tambah Lagu</a>
    <table class="admin-table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Judul Lagu</th>
                <th>Artis</th>
                <th>Genre</th>
                <th style="width:fit-content">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 0;
            while ($data = mysqli_fetch_assoc($query)) {
                $num++;
            ?>
                <tr>
                    <td><?= $num; ?></td>
                    <td><?= $data['judul_lagu']; ?></td>
                    <td><?= $data['nama_artis']; ?></td>
                    <td><?= $data['nama_genre']; ?></td>
                    <td class="flex"><a href="editlagu.php?id_lagu=<?= $data["id_lagu"] ?>" class="button">Edit</a><a href="hapus.php?id_lagu=<?= $data["id_lagu"] ?>" class="button">Hapus</a></a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</div>
<style>
    .wrap {
        display: flex;
        flex-direction: column;
        width: 77%;
    }

    .flex {
        display: flex;
        flex-direction: row;
    }

    .add-button {
        display: block;
        background-color: #05ada2;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin: 20px 0;
        text-align: center;
    }

    .button {
        display: block;
        background-color: blue;
        color: #fff;
        text-decoration: none;
        padding: 10px 20px;
        border-radius: 5px;
        margin-right: 20px;
        text-align: center;
    }

    .admin-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
    }

    .admin-table th,
    .admin-table td {
        padding: 10px;
        text-align: center;
        border: 1px solid #ccc;
    }

    th {
        background-color: #000;
        color: white;
    }

    tr:hover {
        background-color: lightgray;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    th,
    td {
        border-bottom: 1px solid #ddd;
    }
</style>