<?php 
include 'koneksi.php';
$ID = $_POST['ID'];
$NIM = $_POST['NIM'];
$Nama = $_POST['Nama'];
$Jurusan = $_POST['Jurusan'];
$Semester = $_POST['Semester'];
mysqli_query($user,"UPDATE mahasiswa SET id='$ID',nim='$NIM', nama='$Nama', jurusan='$Jurusan', semester='$Semester' WHERE id='$ID' ");
header("location:datamhs.php?pesan=update");
?>