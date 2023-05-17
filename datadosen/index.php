<?php
$koneksi=mysqli_connect("localhost","root","","datadosen");
if (isset($_POST['simpan'])){
    $nama=mysqli_real_escape_string($koneksi, $_POST['nama']);
    $ttL=mysqli_real_escape_string($koneksi, $_POST['ttL']);
    $fakultas=mysqli_real_escape_string($koneksi, $_POST['fakultas']);
    $prodi=mysqli_real_escape_string($koneksi, $_POST['prodi']);
    $simpan=mysqli_query($koneksi,"INSERT INTO db_dos VALUES('$nama','$ttL','$fakultas','$prodi')");
    if ($simpan) {
        echo "<script>window.alert('Data Mahasiswa berhasil disimpan')window.location='index.php'</script>";
    }else{
        echo "<script>window.alert('Data Mahasiswa Gagal disimpan')windiow.location='index.php'</script>";
    }


}
?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>datadosen</title>
</head>
<body>
    <center>
        <h4>Form Input Data Dosen</h4>
        <Form action="" method="post">
            <table>
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        <input type="text" placeholder="Nama"
                        name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>
                    <input type="text" placeholder="Tempat_lahir"
                        name="ttL" required>
                    </td>
                </tr>
                <tr>
                    <td>Fakultas</td>
                    <td>
                    <input type="text" placeholder="Fakultas"
                        name="fakultas" required>
                    </td>
                </tr>
                <tr>
                    <td>Prodi</td>
                    <td>
                    <input type="text" name="prodi"
                        placeholder="Prodi" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="simpan" value="Simpan Data">
                    </td>
                </tr>
            </table>
        </Form>
        </table>
    </center>
</body>
</html>
