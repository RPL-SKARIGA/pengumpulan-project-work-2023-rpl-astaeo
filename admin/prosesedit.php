<?php

    include "koneksi.php";

    $i;

    mysqli_query($conn, "UPDATE `lagu` SET `judul_lagu` = 'Scared To Be Lonely', `id_artis` = '00004', `id_kategori` = '00001' WHERE `lagu`.`id_lagu` = 00001");
?>