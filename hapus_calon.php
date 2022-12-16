<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($user,"DELETE FROM calon WHERE id='$id'")or die(mysql_error());
 
header("location:datacln.php?pesan=hapus");
?>