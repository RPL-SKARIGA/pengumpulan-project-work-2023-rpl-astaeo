<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home || Pianasta</title>
    <link rel="stylesheet" href="baru.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>

    <div class="container">
        <div id="slide">
            <div class="item" style="background-image: url('../image/logout.jpg');">
                <div class="content">
                    <div class="name">Tentang Kami</div>
                    <div class="des">Terimakasih telah mengunjungi web kami</div>
                    <Button onclick="window.location.href='aboutus/about.html'">Klik</Button>
                </div>
            </div>
            <div class="item" style="background-image: url(../image/792431.jpg);">
                <div class="content">
                    <div class="name">Daftar Lagu Pianasta</div>
                    <div class="des">Silahkan pilih lagu lagu kami disini yaaaa</div>
                    <button onclick="window.location.href='daftarlagu.php'">Klik</button>
                </div>
            </div>
            <div class="item" style="background-image: url(../image/8074961.jpg);">
                <div class="content">
                    <div class="name">Genre Lagu</div>
                    <div class="des">Coba cek disini deh genre lagu kamu apaa</div>
                    <button onclick="window.location.href='genre/genre.php'">Klik</button>
                </div>
            </div>
            <div class="item" style="background-image: url(../image/planet.jpg);">
                <div class="content">
                    <div class="name">Artis</div>
                    <div class="des">Siapa artis favorit kamuuu? klik disini yaa</div>
                    <button onclick="window.location.href='artis.php'">Klik</button>
                </div>
            </div>
        </div>
    </div>
    <div class="buttons">
        <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
        <button id="next"><i class="fa-solid fa-angle-right"></i></button>
    </div>
    </div>

    <script src="ini.js"></script>
</body>

</html>