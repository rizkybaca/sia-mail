<?php 

//db
include '../../koneksi.php';

//get form data
$nama_jenjang= $_POST['nama_jenjang'];

//insert
$result=mysqli_query($conn, "INSERT INTO `jenjang` (`nama_jenjang`) VALUES ('$nama_jenjang')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=jenjang-index");
} else {
    echo mysqli_error($conn);
}

?>