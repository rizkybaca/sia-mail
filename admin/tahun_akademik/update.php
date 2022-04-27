<?php 

//db
include '../../koneksi.php';

//get form data
$id_thn_akademik= $_POST['id_thn_akademik'];
$nama_akademik= $_POST['nama_akademik'];
$semester= $_POST['semester'];
$is_active= $_POST['is_active'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `tahun_akademik` SET `nama_akademik`='$nama_akademik', `semester`='$semester', `is_active`='$is_active' WHERE `id_thn_akademik`=$id_thn_akademik");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=tahun_akademik-index");

} else {
    echo mysqli_error($conn);
}

?>

