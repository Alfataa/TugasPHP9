<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<body>
    <h3>Tambah Data</h3>
    <form action="aksi_insert.php" method="POST">
        <table>
            <tr>
                <td>Hari</td>
                <td>
                    <select name="hari">
                        <option value="Senin">Senin</option>
                        <option value="Selasa">Selasa</option>
                        <option value="Rabu">Rabu</option>
                        <option value="Kamis">Kamis</option>
                        <option value="Jumat">Jumat</option>
                        <option value="Sabtu">Sabtu</option>
                        <option value="Minggu">Minggu</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jam</td>
                <td>
                    <input type="text " name="jam">
                </td>
            </tr>
            <tr>
                <td>Ruang</td>
                <td>
                    <input type="text" name="ruang">
                </td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>
                    <select name="MK">
                        <?php
                        include 'koneksi.php';
                        $no = 1;
                        $query = "SELECT * FROM matkul";
                        $result = $koneksi->query($query);
                        while ($row = $result->fetch_array()) { ?>
                            <option value="<?php echo $row['id_matkul'] ?>"><?php echo $row['nama_matkul'] ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit" value="Save">
                    <input type="reset" name="reset" value="Cancel">

                </td>
            </tr>
        </table>
    </form>
</body>

</html>
