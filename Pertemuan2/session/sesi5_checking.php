<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compitable" content="IE=edge">
        <meta name="viewport" content="width=devive-width, initial-scale=1.0">
        <title>Sesi 5 - Checking</title>
</head>
<body>
    <?php
    if(isset($_SESSION['alamat'])) {
    echo "alamat saya " . $_SESSION['alamat'];
    } else {
    echo "Variabel session alamat tidak ada / sudah dihapus";
    }
    ?>
    </body>
    </html>