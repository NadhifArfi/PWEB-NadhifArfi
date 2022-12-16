<?php 
include 'koneksi.php';
$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$Sebagai = $_POST['Sebagai'];
$Organisasi = $_POST['Organisasi'];
 
mysqli_query($user,"INSERT INTO calon VALUES('$ID','$Nama','$Sebagai','$Organisasi')");
 
header("location:datacln.php?pesan=input");
?>