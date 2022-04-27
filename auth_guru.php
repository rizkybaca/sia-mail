<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username/email
$data = mysqli_query($conn,"SELECT * FROM `guru` WHERE `email`='$email'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
 
if($cek > 0){
    //ambil data guru sesuai dg data yg login
    $row=mysqli_fetch_array($data, MYSQLI_ASSOC);

    if (password_verify($password, $row['password'])) {
        if ($row['role']=='Admin') {
            $_SESSION['email'] = $email;
            $_SESSION['id_guru'] = $row['id_guru'];
            $_SESSION['nama_guru'] = $row['nama_guru'];
            $_SESSION['status'] = "login";
            $_SESSION['role'] = $row['role'];
            header("location:admin/index.php");
        } elseif($row['role']=='Guru') {
            $_SESSION['email'] = $email;
            $_SESSION['id_guru'] = $row['id_guru'];
            $_SESSION['nama_guru'] = $row['nama_guru'];
            $_SESSION['status'] = "login";
            $_SESSION['role'] = $row['role'];
            header("location:guru/index.php");
        } 
    } else {
        header("location:index_guru.php?pesan=gagal");
    }    
}else{
	header("location:index_guru.php?pesan=gagal");
}

?>