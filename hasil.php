<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 9</title>
</head>

<body>
    <a href="form_insert.php">Tambah</a>
    <table border='1' cellspacing='0' cellpadding='10'>
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Hari</td>
            <td>Jam</td>
            <td>Ruangan</td>
        </tr>

        <!-- start connection -->
        <?php
        include 'koneksi.php';
        $no = 1;
        $query = "SELECT * FROM jadwal INNER JOIN matkul ON jadwal.id_matkul = matkul.id_matkul";
        $result = $koneksi->query($query);
        while ($row = $result->fetch_array()) { ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nama_matkul'] ?></td>
                <td><?php echo $row['hari'] ?></td>
                <td><?php echo $row['jam'] ?></td>
                <td><?php echo $row['ruang'] ?></td>
            </tr>
        <?php } ?>

    </table>
</body>

</html>
