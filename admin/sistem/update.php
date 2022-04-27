<?php 

//db
include '../../koneksi.php';

//get form data
$id_sistem= $_POST['id_sistem'];
$nama_sistem= $_POST['nama_sistem'];
$versi= $_POST['versi'];
$pengembang= $_POST['pengembang'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `profil_sistem` SET `nama_sistem`='$nama_sistem',`versi`='$versi',`pengembang`='$pengembang' WHERE `id_sistem`=$id_sistem");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=sistem-index");

} else {
    echo mysqli_error($conn);
}

?>

