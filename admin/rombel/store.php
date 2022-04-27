<?php 

//db
include '../../koneksi.php';

//get form data
$thn_angkatan_id= $_POST['thn_angkatan_id'];

//insert
$result=mysqli_query($conn, "INSERT INTO `rombel` (`thn_angkatan_id`) VALUES ('$thn_angkatan_id')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=rombel-index");
} else {
    echo mysqli_error($conn);
}

?>