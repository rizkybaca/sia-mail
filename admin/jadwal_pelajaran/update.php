<?php 

//db
include '../../koneksi.php';

//get form data
$id_jdwl_pelajaran= $_POST['id_jdwl_pelajaran'];
$thn_akademik_id= $_POST['thn_akademik_id'];
$kelas_id= $_POST['kelas_id'];
$pelajaran_kode= $_POST['pelajaran_kode'];
$hari_id= htmlspecialchars($_POST['hari_id']);
$jam_mulai= $_POST['jam_mulai'];
$jam_selesai= $_POST['jam_selesai'];
$ruangan= htmlspecialchars($_POST['ruangan']);
// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `jadwal_pelajaran` SET `thn_akademik_id`='$thn_akademik_id', `kelas_id`='$kelas_id', `pelajaran_kode`='$pelajaran_kode', `hari_id`='$hari_id', `jam_mulai`='$jam_mulai', `jam_selesai`='$jam_selesai', `ruangan`='$ruangan' WHERE `id_jdwl_pelajaran`=$id_jdwl_pelajaran");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=jadwal_pelajaran-index");

} else {
    echo mysqli_error($conn);
}

?>

