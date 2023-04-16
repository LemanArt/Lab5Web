<?php
// mengecek apakah ada data yang disubmit
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // menampilkan data yang disubmit
    echo "<h2>Data yang disubmit:</h2>";
    echo "<ul>";
    foreach ($_POST as $key => $value) {
        echo "<li>" . $key . ": " . $value . "</li>";
    }
    echo "</ul>";
}
?>