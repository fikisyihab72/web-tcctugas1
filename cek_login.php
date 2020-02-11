<?php 
// mengaktifkan session php

 
// menghubungkan dengan koneksi
include 'basisdata.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from login where email='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
	
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>