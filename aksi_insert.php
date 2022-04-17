<?php

include('./koneksi.php');

$id_matkul = $_POST['MK'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];

$query = "INSERT INTO jadwal (id_matkul, hari, jam, ruang) VALUES ('$id_matkul', '$hari', '$jam', '$ruang')";
$insert = $koneksi->query($query);

if ($insert == true) {
    header('location: hasil.php');
} else {
    echo "
    <script>
        alert('ERROR');
    </script>
    ";
}
