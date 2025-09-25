<?php

    $hostname = "Localhost";
    $userDataBase = "root";
    $passwordUser = "";
    $databaseName = "kuliah_pemrograman_web";

    $koneksi = mysqli_connect($hostname, $userDataBase, $passwordUser,$databaseName) or die (mysqli_error($koneksi));

    // if ($koneksi) {
    //     echo "berhasil koneksi";
    // }else echo "gagal koneksi";

?>