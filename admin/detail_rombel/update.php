<?php 

//db
include '../../koneksi.php';

//get form data
$id_rombel= $_POST['id_rombel'];
$thn_angkatan_id= $_POST['thn_angkatan_id'];
// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `rombel` SET `thn_angkatan_id`='$thn_angkatan_id' WHERE `id_rombel`=$id_rombel");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=rombel-index");

} else {
    echo mysqli_error($conn);
}

?>

