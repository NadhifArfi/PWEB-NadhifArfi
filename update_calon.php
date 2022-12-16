<?php 
 
include 'koneksi.php';
if(isset($_POST['simpan'])){

$ID = $_POST['ID'];
$Nama = $_POST['Nama'];
$Sebagai = $_POST['Sebagai'];
$Organisasi = $_POST['Organisasi'];
 
mysqli_query($user,"UPDATE calon SET id='$ID',nama='$Nama', sebagai='$Sebagai', Organisasi='$Organisasi' WHERE id='$ID'");
 
header("location:datacln.php?pesan=update");
}
?>