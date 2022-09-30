<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compitable" content="IE=edge">
        <meta name="viewport" content="width=devive-width, initial-scale=1.0">
        <title>Sesi 4 - Error</title>
</head>
<body>
    <?php
    echo "Isi dari variabel session alamat adalah " . $_SESSION['alamat'];
    ?>
    </body>
    </html>