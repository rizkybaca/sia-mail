<?php 

//db
include '../../koneksi.php';

//get form data
$thn_akademik_id= $_POST['thn_akademik_id'];
$kelas_id= $_POST['kelas_id'];
$pelajaran_id= $_POST['pelajaran_id'];
$hari_id= htmlspecialchars($_POST['hari_id']);
$jam_mulai= $_POST['jam_mulai'];
$jam_selesai= $_POST['jam_selesai'];
$ruangan= htmlspecialchars($_POST['ruangan']);

//insert
$result=mysqli_query($conn, "INSERT INTO `jadwal_pelajaran` (`thn_akademik_id`, `kelas_id`, `pelajaran_id`, `hari_id`, `jam_mulai`, `jam_selesai`, `ruangan`) VALUES ('$thn_akademik_id', '$kelas_id', '$pelajaran_id', '$hari_id', '$jam_mulai', '$jam_selesai', '$ruangan')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=jadwal_pelajaran-index");
} else {
    echo mysqli_error($conn);
}

?>