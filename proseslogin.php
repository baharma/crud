<?php
session_start();
include 'koneksi.php';

$username=$_POST['username'];
$password=$_POST['password'];
$data=mysqli_query($koneksi,"select * from table_user where username'$username' and password='$password'");
$cek= mysqli_num_rows($data);
if ($cek>0) {
	$_SESSION['username'] = $username;
	echo "<script>alert('berhasil login');location.href='../home.php'</script>";
}
else{
	
}
?>