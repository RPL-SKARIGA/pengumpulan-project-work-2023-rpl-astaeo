<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  <style>
    @charset "UTF-8";
    @import url(https://fonts.googleapis.com/css?family=Open+Sans:300,400,700);

    body {
      font-family: 'Open Sans', sans-serif;
      font-weight: 300;
      line-height: 1.42em;
      color: #A7A1AE;
      background-image: url('../image/planet.jpg');
      background-size: cover;
    }

    h1 {
      font-size: 3em;
      font-weight: 300;
      line-height: 1em;
      text-align: center;
      color: #4DC3FA;
    }

    h2 {
      font-size: 1em;
      font-weight: 300;
      text-align: center;
      display: block;
      line-height: 1em;
      padding-bottom: 2em;
      color: #FB667A;
    }

    h2 a {
      font-weight: 700;
      text-transform: uppercase;
      color: #FB667A;
      text-decoration: none;
    }

    .blue {
      color: #185875;
    }

    .yellow {
      color: #FFF842;
    }

    .container th h1 {
      font-weight: bold;
      font-size: 1em;
      text-align: left;
      color: #185875;
    }

    .container td {
      font-weight: normal;
      font-size: 1em;
      -webkit-box-shadow: 0 2px 2px -2px #0E1119;
      -moz-box-shadow: 0 2px 2px -2px #0E1119;
      box-shadow: 0 2px 2px -2px #0E1119;
    }

    .container {
      text-align: left;
      overflow: hidden;
      width: 80%;
      margin: 0 auto;
      display: table;
      padding: 0 0 8em 0;
    }

    .container2 {
      display: flex;
      flex-direction: row;
      overflow: hidden;
      width: 75%;
      margin: 0 auto;
      padding: 0 0 40px 0;
    }

    .container td,
    .container th {
      padding-bottom: 2%;
      padding-top: 2%;
      padding-left: 2%;
    }

    /* Background-color of the odd rows */
    .container tr:nth-child(odd) {
      background-color: #323C50;
    }

    /* Background-color of the even rows */
    .container tr:nth-child(even) {
      background-color: #2C3446;
    }

    .container th {
      background-color: #1F2739;
    }

    .container td:first-child {
      color: #FB667A;
    }

    .container tr:hover {
      background-color: #464A52;
      -webkit-box-shadow: 0 6px 6px -6px #0E1119;
      -moz-box-shadow: 0 6px 6px -6px #0E1119;
      box-shadow: 0 6px 6px -6px #0E1119;
    }

    .container td:hover {
      background-color: #DBA5FF;
      color: #403E10;
      font-weight: bold;

      box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
      transform: translate3d(6px, -6px, 0);

      transition-delay: 0s;
      transition-duration: 0.4s;
      transition-property: all;
      transition-timing-function: line;
    }

    @media (max-width: 800px) {

      .container td:nth-child(4),
      .container th:nth-child(4) {
        display: none;
      }
    }

    .search {
      display: block;
      padding: 6px;
      border: none;
      margin-top: 8px;
      font-size: 17px;
    }
  </style>
</head>

<body>
  <h1><span class="blue"></span>Tabel<span class="blue"></span> <span class="yellow">Lagu</pan>
  </h1>
  <h2>dan Artis</h2>
  <form class="container2" action="daftarlagu.php" method="get">
    <input type="text" placeholder="cari lagu" class="search" style="margin-right: 30px;" name="search">
    <button type="submit">Search</button>
  </form>
  <table class="container">
    <thead>
      <tr>
        <th>Nomor</th>
        <th>Artis</th>
        <th>Judul Lagu</th>
      </tr>
    </thead>
    <tbody>
      <?php
      include "../admin/koneksi.php";
      $lagu = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM lagu"));

      if (isset($_GET["id_artis"])) {
        $lagu = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM lagu WHERE id_artis=" . $_GET["id_artis"]));
      }

      if (isset($_GET["id_kategori"])) {
        $lagu = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM lagu WHERE id_kategori=" . $_GET["id_kategori"]));
      }

      if (isset($_GET['search'])) {
        $lagu = mysqli_fetch_all(mysqli_query($conn, "SELECT * FROM lagu WHERE judul_lagu LIKE '" . $_GET['search'] . "%'"));
      }

      $i = 1;

      foreach ($lagu as $_l) {
        $data_artis = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM artis WHERE id_artis=" . $_l[2]));
      ?>
        <tr>
          <td><?= $i++; ?></td>
          <td onclick="window.location.href ='daftarlagu.php?id_artis=<?= $data_artis['id_artis'] ?>'"><?= $data_artis['nama_artis'] ?></td>
          <td onclick="window.location.href ='lagu.php?id_lagu=<?= $_l[0] ?>'"><?= $_l[1]; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>