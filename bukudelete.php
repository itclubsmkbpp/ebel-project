<?php
error_reporting(E_ALL ^ E_NOTICE);
include "../../connect.php";

$idbuku=$_GET['id'];

$query = "DELETE FROM buku WHERE id_buku='$id_buku'";
$hasil = mysqli_query($conn,$query);

if ($hasil){
  echo '<script language="javascript">alert("Data berhasil dihapus!"); document.location="bukutampil.php";</script>';
}else{
  echo '<script language="javascript">alert("Data gagal dihapus!"); document.location="bukutampul.php";</script>';
}
?>
