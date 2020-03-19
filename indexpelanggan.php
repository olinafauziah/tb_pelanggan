<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Tabel Pelanggan</title>
    <br>
</head>

<body>
    <div class="container">
        <h2>Latihan Membuat Tabel</h2>
        <a href="" class=" btn btn-primary mb-5"> Tambah Data Pelanggan </a>
        <br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"> id pelanggan</th>
                    <th scope="col"> nama pelanggan</th>
                    <th scope="col"> alamat</th>
                    <th scope="col"> nomor hp</th>
                    <th>aksi</th>
                </tr>
            </thead>

            <?php

            $ambil = $koneksi->query("select * from tb_pelanggan");
            while ($pelanggan = $ambil->fetch_array()) {

            ?>
                <tbody>
                    <tr>
                        <td><?php echo $pelanggan['id_pelanggan'] ?></td>
                        <td><?php echo $pelanggan['nama_pelanggan'] ?></td>
                        <td><?php echo $pelanggan['alamat'] ?></td>
                        <td><?php echo $pelanggan['no.hp'] ?></td>
                        <td>
                            <a href="" class=" btn btn-warning">Edit</a>
                            <a href="hapus.php?dHapus=<?php echo $pelanggan['id_pelanggan'] ?>" class=" btn btn-danger">Hapus</a>
                            <a href="detail.php?dDetail=<?php echo $pelanggan['id_pelanggan'] ?>" class=" btn btn-success">Detail</a>
                        </td>
                    </tr>
                <?php
            }
                ?>
                </tbody>

        </table>
    </div>

</body>

</html>