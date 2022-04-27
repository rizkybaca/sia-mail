<?php 

//db
include '../../koneksi.php';

//get form data
$nama_pelajaran= htmlspecialchars($_POST['nama_pelajaran']);
$kurikulum_id= $_POST['kurikulum_id'];
$jenjang_id= $_POST['jenjang_id'];
$guru_id= $_POST['guru_id'];

//insert
$result=mysqli_query($conn, "INSERT INTO `pelajaran` (`nama_pelajaran`, `kurikulum_id`, `jenjang_id`, `guru_id`) VALUES ('$nama_pelajaran', '$kurikulum_id', '$jenjang_id', '$guru_id')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=pelajaran-index");
} else {
    echo mysqli_error($conn);
}

?>