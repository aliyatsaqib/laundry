<?php
// koneksi database
include '../koneksi.php';

//menambahkan data yang dikirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tlp = $_POST['tlp'];

//menginput data ke database
mysqli_query($koneksi,"insert into tb_outlet values('','$nama','$alamat','$tlp')");

//mengalihkan halaman kembali ke outlet.php
header("location:outlet.php?info=simpan");
?>
