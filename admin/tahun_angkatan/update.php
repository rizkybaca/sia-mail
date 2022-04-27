<?php 

//db
include '../../koneksi.php';

//get form data
$id_thn_angkatan= $_POST['id_thn_angkatan'];
$nama_angkatan= $_POST['nama_angkatan'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `tahun_angkatan` SET `nama_angkatan`='$nama_angkatan' WHERE `id_thn_angkatan`=$id_thn_angkatan");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=tahun_angkatan-index");

} else {
    echo mysqli_error($conn);
}

?>

