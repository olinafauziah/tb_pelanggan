<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'db_dasar_mysql');
if ($koneksi) {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tambah Pelanggan</title>
</head>

<body>
    <div class="container">
        <h4>Tambah Data Pelanggan</h4>

        <a href="indexpelanggan.php" class=" btn btn-primary mb-4 ">Kembali</a>
        <form action="" method="POST" style="width: 50%">
            <div class="form-group">
                <label>id pelanggan</label>
                <input name="txt_idpelanggan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>nama pelanggan</label>
                <input name="txt_nmpelanggan" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>alamat</label>
                <input name="txt_alamat" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>nomor hp</label>
                <input name="txt_nohp" type="text" class="form-control">
            </div>
            <button type="submit" name="simpan" value="simpan">simpan</button>
        </form>
        <?php

        if (isset($_POST['simpan'])) {
            $txt_idpelanggan = $_POST['id_pelanggan'];
            $txt_nmpelanggan = $_POST['nama_pelanggan'];
            $txt_alamat = $_POST['alamat'];
            $txt_nohp = $_POST['no.hp'];

            $koneksi->query("INSERT INTO `tb_pelanggan`(`id_pelanggan`,
             `nama_pelanggan`, 
             `alamat`,
              `no.hp`) VALUES (
                  '$txt_idpelanggan',
                  '$txt_nmpelanggan',
                  '$txt_alamat',
                  '$txt_nohp')");
        }
        ?>
    </div>
</body>

</html>