<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compitable" content="IE=edge">
        <meta name="viewport" content="width=devive-width, initial-scale=1.0">
        <title>Sesi 7 - Unset</title>
</head>
<body>
    <?php
        unset($_SESSION['absen']);
        if(isset($_SESSION['absen'])) {
            echo "Absen saya " . $_SESSION['absen'];
        } else {
            echo "Maaf absen tidak ditemukan";
        }
    ?>
    </body>
    </html>