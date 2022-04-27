<?php 

//db
include '../../koneksi.php';

//get form data
$id_sekolah= $_POST['id_sekolah'];
$nama_sekolah= $_POST['nama_sekolah'];
$visi= $_POST['visi'];
$misi= $_POST['misi'];
$tujuan= $_POST['tujuan'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `profil_sekolah` SET `nama_sekolah`='$nama_sekolah',`visi`='$visi',`misi`='$misi',`tujuan`='$tujuan' WHERE `id_sekolah`=$id_sekolah");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=sekolah-index");

} else {
    echo mysqli_error($conn);
}

?>

