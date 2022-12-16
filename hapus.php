<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($user,"DELETE FROM mahasiswa WHERE id='$id'")or die(mysql_error());
 
header("location:datamhs.php?pesan=hapus");
?>