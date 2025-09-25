<?php
include "koneksi.php";

// input data
$nama_mhs = $_POST['nama'];
$prodi_mhs = $_POST['prodi'];
$perulangan = $_POST['ulangi'];
$jk = $_POST['jkelamin'];

$proses = mysqli_query($koneksi, "INSERT INTO mahasiswa (jenis_kelamin, nama_mahasiswa, prodi) 
                   VALUES ('$jk', '$nama_mhs', '$prodi_mhs')")
or die (mysqli_error($koneksi));

if ($proses) {
    echo "<script>
            alert('Data berhasil Disimpan');
            window.location.href='pertemuan12.php';
          </script>";
} else {
    echo "<script>
            alert('Data gagal Disimpan');
            window.location.href='pertemuan12.php';
          </script>";
}

// if ($nilai_mhs != "") {
//     if ($nilai_mhs >= 85) {
//         $huruf_mutu = 'A';
//     } elseif ($nilai_mhs >= 75) {
//         $huruf_mutu = 'B';
//     } elseif ($nilai_mhs >= 65) {
//         $huruf_mutu = 'C';
//     } else {
//         $huruf_mutu = 'E';
//     }

//     for ($x = 0; $x < $perulangan; $x++) {
//         echo $nama_mhs . " Nilai mata kuliah anda adalah : " . $huruf_mutu . " <br>";
//     }
// }
?>