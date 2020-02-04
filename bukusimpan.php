<?php
error_reporting(E_ALL ^ E_NOTICE);
include "../../connect.php";


$nama = $_POST['nama_buku'];
$penerbit = $_POST['penerbit_buku'];
$penyusun = $_POST['penyusun_buku'];
$tahun = $_POST['tahun_buku'];
$harga = $_POST['harga_buku'];
$stok = $_POST['stok_buku'];

$query = "INSERT INTO buku VALUES ('','$nama','$penerbit','$penyusun','$tahun','$harga','$stok')";
$hasil = mysqli_query($conn,$query);

if($hasil){
  echo '<script language="javascript">alert("Data berhasil disimpan!"); document.location="bukutampil.php";</script>';
}else{
  echo '<script language="javascript">alert("Data gagal disimpan!"); document.location="bukutampil.php";</script>';
}
?>
