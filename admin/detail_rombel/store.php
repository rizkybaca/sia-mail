<?php 

//db
include '../../koneksi.php';

//get form data
$rombel_id= $_POST['rombel_id'];
$siswa_nisn= $_POST['siswa_nisn'];
$kelas_id= $_POST['kelas_id'];
$kurikulum_id= $_POST['kurikulum_id'];
$thn_akademik_id= $_POST['thn_akademik_id'];

//insert
$result=mysqli_query($conn, "INSERT INTO `detail_rombel` (`rombel_id`,`siswa_nisn`,`kelas_id`,`kurikulum_id`,`thn_akademik_id`) VALUES ('$rombel_id','$siswa_nisn','$kelas_id','$kurikulum_id','$thn_akademik_id')");
// var_dump($_POST);die();
//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=detail_rombel-index&id_rombel=".$rombel_id."");
} else {
    echo mysqli_error($conn);
}

?>