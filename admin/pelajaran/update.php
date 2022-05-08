<?php 

//db
include '../../koneksi.php';

//get form data
$id_pelajaran= $_POST['id_pelajaran'];
$kurikulum_id= $_POST['kurikulum_id'];
$jenjang_id= $_POST['jenjang_id'];
$guru_nip= $_POST['guru_nip'];
$nama_pelajaran= $_POST['nama_pelajaran'];
// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `pelajaran` SET `nama_pelajaran`='$nama_pelajaran', `kurikulum_id`='$kurikulum_id', `jenjang_id`='$jenjang_id', `guru_nip`='$guru_nip' WHERE `id_pelajaran`=$id_pelajaran");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=pelajaran-index");

} else {
    echo mysqli_error($conn);
}

?>

