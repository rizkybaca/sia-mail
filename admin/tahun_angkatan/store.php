<?php 

//db
include '../../koneksi.php';

//get form data
$nama_angkatan= $_POST['nama_angkatan'];

//insert
$result=mysqli_query($conn, "INSERT INTO `tahun_angkatan` (`nama_angkatan`) VALUES ('$nama_angkatan')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=tahun_angkatan-index");
} else {
    echo mysqli_error($conn);
}

?>