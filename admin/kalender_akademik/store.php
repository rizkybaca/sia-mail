<?php 

//db
include '../../koneksi.php';

//get form data
$nama_kegiatan= $_POST['nama_kegiatan'];
$waktu_mulai= $_POST['waktu_mulai'];
$waktu_selesai= $_POST['waktu_selesai'];
$thn_akademik_id= $_POST['thn_akademik_id'];

//insert
$result=mysqli_query($conn, "INSERT INTO `kalender_akademik` (`nama_kegiatan`, `waktu_mulai`, `waktu_selesai`, `thn_akademik_id`) VALUES ('$nama_kegiatan', '$waktu_mulai', '$waktu_selesai', '$thn_akademik_id')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kalender_akademik-index");
} else {
    echo mysqli_error($conn);
}

?>