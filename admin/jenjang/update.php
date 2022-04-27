<?php 

//db
include '../../koneksi.php';

//get form data
$id_jenjang= $_POST['id_jenjang'];
$nama_jenjang= $_POST['nama_jenjang'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `jenjang` SET `nama_jenjang`='$nama_jenjang' WHERE `id_jenjang`=$id_jenjang");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=jenjang-index");

} else {
    echo mysqli_error($conn);
}

?>

