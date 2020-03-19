<?php
$id_hapus = $_GET['dHapus'];

include 'koneksi.php';

$koneksi->query("DELETE FROM `tb_pelanggan` WHERE id_pelanggan = '$id_hapus'");

echo "<script>
alert('Data dihapus');
window.location='indexpelanggan.php';
</script>";
