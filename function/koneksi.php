<?php
    $server     = "localhost";
    $username   = "root";
    $password   = "";
    $database   = "aashop";

    $koneksi = mysqli_connect($server, $username, $password, $database) or die("koneksi database gagal.");

?>