<?php
$id_detail = $_GET['dDetail'];

include 'koneksi.php';

$query = $koneksi->query("SELECT * FROM `tb_pelanggan` WHERE id_pelanggan = '$id_detail'");
$data = $query->fetch_assoc();
?>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <div class="container">
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

            <tbody>
                <tr>
                    <td><?php echo $data['id_pelanggan'] ?></td>
                    <td><?php echo $data['nama_pelanggan'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td><?php echo $data['no.hp'] ?></td>
                    <td>
                        <a href="" class=" btn btn-warning">Edit</a>
                        <a href="hapus.php?dHapus=<?php echo $pelanggan['id_pelanggan'] ?>" class=" btn btn-danger">Hapus</a>
                        <a href="detail.php?dDetail=<?php echo $pelanggan['id_pelanggan'] ?>" class=" btn btn-success">Detail</a>
                    </td>
                </tr>
                <?php

                ?>
            </tbody>

        </table>
    </div>
</body>