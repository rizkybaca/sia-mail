<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($conn, "SELECT * FROM `siswa` WHERE `email`='$email'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {

    //ambil data siswa sesuai dg data yg login
    $row = mysqli_fetch_array($data, MYSQLI_ASSOC);

    if (password_verify($password, $row['password'])) {
        if ($row['role'] == 'Siswa') {
            $_SESSION['email'] = $email;
            $_SESSION['id_siswa'] = $row['id_siswa'];
            $_SESSION['nama_siswa'] = $row['nama_siswa'];
            $_SESSION['status'] = "login";
            $_SESSION['role'] = $row['role'];
            header("location:siswa/index.php");
        }
    } else {
        header("location:index_siswa.php?pesan=gagal");
    }
} else {
    header("location:index_siswa.php?pesan=gagal");
}
