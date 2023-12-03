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
</style>
<body class="body">
    <div style="align-items:center;">
    <form class="login100-form validate-form" action="prosesinsertlagu.php" method="post">
        <div class="flex">
            <input class="form-control w-50" placeholder="Judul Lagu" type="text" name="nama_lagu" id="">
            <select class="btn-group dropup" name="id_artis" id="">
                <?php foreach ($artist as $artis) {?>
                    <option value="<?=$artis[0]?>"><?=$artis[1]?></option>
                <?php }?>
            </select>
            <select class="btn-group dropup" name="id_genre" id="">
                <?php foreach ($genre as $tema) {?>
                    <option value="<?=$tema[0]?>"><?=$tema[1]?></option>
                <?php }?> -
            </select>
        </div><br>
        <div id="quill_content">
        </div><br>
        <input type="hidden" name="lirik" id="lirik">
        <button type="submit" class="double-spacing">Simpan</button>
    </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var quill = new Quill('#quill_content', {
                theme: 'snow',
            });
            quill.root.addEventListener('keyup', function() {
                prepareDataAndSubmit();
            });

            function prepareDataAndSubmit() {
                var quillContent = quill.root.innerHTML;
                document.getElementById('lirik').value = quillContent;
            }
        });
    </script>
    </div>
    </div>
</body>

</html>