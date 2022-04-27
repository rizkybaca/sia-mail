<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn,"SELECT * FROM `siswa` WHERE `email`='$email' AND `password`='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){

    //ambil data guru sesuai dg data yg login
    $row=mysqli_fetch_array($data, MYSQLI_ASSOC);

    if ($row['role']=='Siswa') {
        $_SESSION['email'] = $email;
        $_SESSION['status'] = "login";
        $_SESSION['role'] = $row['role'];
        header("location:siswa/index.php");
    } 
}else{
	header("location:index.php?pesan=gagal");
}

?>