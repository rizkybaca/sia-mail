<?php 

//db
include '../../koneksi.php';

//get form data
$nama_kelas= htmlspecialchars($_POST['nama_kelas']);
$jenjang_id= $_POST['jenjang_id'];

//insert
$result=mysqli_query($conn, "INSERT INTO `kelas` (`nama_kelas`, `jenjang_id`) VALUES ('$nama_kelas', '$jenjang_id')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kelas-index");
} else {
    echo mysqli_error($conn);
}

?>