<?php include "./header.php";

$query = mysqli_query($conn, "SELECT * from artis");
?>
<div class="wrap">
    <a class="add-button" href="./tambahartis.php">Tambah Artis</a>
    <table class="admin-table">
        <thead>
            <tr>
                <th>ID Artis</th>
                <th>Nama Artis</th>
                <th style="width:fit-content">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 0;
            while ($data = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td><?= $data['id_artis']; ?></td>
                    <td><?= $data['nama_artis']; ?></td>
                    <td class="flex"><button class="button">Edit</button><a href="hapusartis.php?id_artis=<?= $data["id_artis"] ?>" class="button">Hapus</a></td>
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