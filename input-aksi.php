<?php 
include 'koneksi.php';
$ID = $_POST['Id'];
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$semester = $_POST['semester'];
mysqli_query($user,"INSERT INTO mahasiswa VALUES('$ID','$nim','$nama','$jurusan','$semester')");
 
header("location:datamhs.php?pesan=input");
?>