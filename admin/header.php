<?php
include "koneksi.php";

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ./Login/log.php");
}

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="in.css">
</head>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
        display: flex;
        min-height: 100vh;
    }

    .wrapper {
        display: flex;
    }

    #sidebar {
        width: 200px;
        background-color: #343a40;
        padding: 20px;
        box-shadow: 2px 0px 5px rgba(0, 0, 0, 0.1);
        color: #fff;
        transition: width 0.3s ease;
    }

    #sidebar:hover {
        width: 270px;
    }

    #sidebar h2 {
        margin-bottom: 20px;
        font-size: 24px;
    }

    #content {
        flex: 1;
        padding: 20px;
        transition: margin-left 0.3s;
    }

    ul.menu {
        list-style: none;
        padding: 0;
    }

    ul.menu li {
        margin-bottom: 10px;
    }

    ul.menu li a {
        text-decoration: none;
        color: #fff;
        font-weight: bold;
        padding: 12px 20px;
        border-radius: 5px;
        display: block;
        transition: background-color 0.3s;
    }

    ul.menu li a:hover {
        background-color: #0056b3;
    }

    @media only screen and (max-width: 768px) {
        .wrapper {
            flex-direction: column;
        }

        #sidebar {
            width: 100%;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 1000;
        }

        #content {
            margin-top: 60px;
        }

        #sidebar:hover {
            width: 100%;
        }
    }
</style>
</head>

<body>
    <div class="wrapper">
        <div id="sidebar">
            <h2>Dashboard Pianasta</h2>
            <ul class="menu">
                <li><a href="./listlagu.php"><i class="fas fa-newspaper"></i>Chord</a></li>
                <li><a href="./listartis.php"><i class="fas fa-newspaper"></i>Artis</a></li>
                <li><a href="./Login/logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
            </ul>
        </div>

        <div id="content">
            <!-- Your page content goes here -->

        </div>
    </div>
    <script>
        function toggleMenu() {
            var sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('show');
        }
    </script>

</body>

</html>