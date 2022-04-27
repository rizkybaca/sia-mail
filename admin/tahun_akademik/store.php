<?php 

//db
include '../../koneksi.php';

//get form data
$nama_akademik= $_POST['nama_akademik'];
$semester= $_POST['semester'];
$is_active= $_POST['is_active'];

//insert
$result=mysqli_query($conn, "INSERT INTO `tahun_akademik` (`nama_akademik`, `semester`, `is_active`) VALUES ('$nama_akademik', '$semester', '$is_active')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=tahun_akademik-index");
} else {
    echo mysqli_error($conn);
}

?>