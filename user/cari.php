<?php
include "./admin/koneksi.php";

$result = mysqli_query($conn, "SELECT * FROM lagu");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<div id='link' onClick='addText(\"" . $row['username'] . "\");'>" . $row['username'] . "</div>";
}
