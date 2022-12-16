<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($user,"select * from akun where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if($cek)
{
    header('location:dashboard.php');
}else{
    header('location:index.php');
}
?>