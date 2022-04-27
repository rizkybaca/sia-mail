<?php 

//db
include '../../koneksi.php';

//get form data
$id_kelas= $_POST['id_kelas'];
$jenjang_id= $_POST['jenjang_id'];
$nama_kelas= $_POST['nama_kelas'];
// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `kelas` SET `nama_kelas`='$nama_kelas', `jenjang_id`='$jenjang_id' WHERE `id_kelas`=$id_kelas");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kelas-index");

} else {
    echo mysqli_error($conn);
}

?>

