<?php 

//db
include '../../koneksi.php';

//get form data
$id_klndr_akademik= $_POST['id_klndr_akademik'];
$thn_akademik_id= $_POST['thn_akademik_id'];
$nama_kegiatan= $_POST['nama_kegiatan'];
$waktu_mulai= $_POST['waktu_mulai'];
$waktu_selesai= $_POST['waktu_selesai'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `kalender_akademik` SET `nama_kegiatan`='$nama_kegiatan', `waktu_mulai`='$waktu_mulai', `waktu_selesai`='$waktu_selesai', `thn_akademik_id`='$thn_akademik_id' WHERE `id_klndr_akademik`=$id_klndr_akademik");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kalender_akademik-index");

} else {
    echo mysqli_error($conn);
}

?>

