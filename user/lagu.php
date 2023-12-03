<?php
include "../admin/koneksi.php";
session_start();

if (!isset($_GET["id_lagu"])) {
    header("Location: daftarlagu.php");
}

$lagu = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM lagu WHERE id_lagu=" . $_GET["id_lagu"]));
$data_artis = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM artis WHERE id_artis=" . $lagu['id_artis']));
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $data_artis["nama_artis"] ?> - <?= $lagu["judul_lagu"] ?></title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Lato', sans-serif;
        line-height: 1.5;
        background-image: url('../image/792431.jpg');
        background-size: cover;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        width: 651px;
        max-width: 100%;
        background: #fff;
        padding: 30px;
        margin: 0 20px;
        box-shadow: 0 0 5px rgba(75, 75, 75, 0.7);
        z-index: 1;
        box-shadow: black;
        border-radius: 25px;
        background-color: lightgray;
    }

    .button {
        font-family: "Open Sans", sans-serif;
        font-size: 16px;
        letter-spacing: 2px;
        text-decoration: none;
        text-transform: uppercase;
        color: #000;
        cursor: pointer;
        border: 3px solid;
        padding: 0.25em 0.5em;
        box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
        position: relative;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-54:active {
        box-shadow: 0px 0px 0px 0px;
        top: 5px;
        left: 5px;
    }

    @media (min-width: 768px) {
        .button-54 {
            padding: 0.25em 0.75em;
        }
    }

    strong {
        color: darkblue;
    }
</style>

<body>
    <div class="container">
        <div class="judul">
            <h1 class="title"><?= $lagu["judul_lagu"] ?></h1>
            <br><br>
            <p>by <?= $data_artis["nama_artis"] ?></p>
            <br>
        </div>

        <div class="trans">
            <form method="GET" action="lagu.php">
                <input type="hidden" name="id_lagu" value="<?= $_GET["id_lagu"] ?>" />
                transpoose : &nbsp;
                <input class="button" id="transposeDown" type="button" value="Down - " /> |
                <input class="button" id="transposeUp" type="button" value="Up + " /> |
                <input class="button" type="submit" name="reset" value="Reset" />
            </form><br>
        </div>
        <div class="lirik">
            <p>Lirik :</p>
            <p class="chordd" cols="30" rows="10"><?= $lagu["chord"] ?></p>
        </div>
        <button class="button" onclick="window.location.href='lagu.php'">Back</button>
        <script type="text/javascript">
            var match;
            var chords = ['C', 'C#', 'D', 'Eb', 'E', 'F', 'F#', 'G', 'Ab', 'A', 'Bb', 'B', 'C',
                'Db', 'D', 'D#', 'E', 'F', 'Gb', 'G', 'G#', 'A', 'A#', 'C '
            ];
            var chordRegex = /C#|D#|F#|G#|A#|Db|Eb|Gb|Ab|Bb|C|D|E|F|G|A|B/g;

            $(document).ready(() => {
                $('#transposeUp').click(function() {
                    $('.chordd').find("strong").each(function() {
                        var currentChord = $(this).text();
                        var output = "";
                        var parts = currentChord.split(chordRegex);
                        var index = 0;
                        while (match = chordRegex.exec(currentChord)) {
                            var chordIndex = chords.indexOf(match[0]);
                            const new_chord = parts[index++] + chords[chordIndex + 1]

                            output += new_chord;
                        }

                        output += parts[index];
                        $(this).html(output);
                    });
                });

                $('#transposeDown').click(function() {
                    $('.chordd').find("strong").each(function() {
                        var currentChord = $(this).text();
                        var output = "";
                        var parts = currentChord.split(chordRegex);
                        var index = 0;
                        while (match = chordRegex.exec(currentChord)) {
                            var chordIndex = chords.indexOf(match[0], 1);
                            output += parts[index++] + chords[chordIndex - 1];
                        }
                        output += parts[index];
                        $(this).text(output);
                    });
                });
            })
        </script>
    </div>
</body>

</html>