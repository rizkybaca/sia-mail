<?php 

//db
include '../../koneksi.php';

//get form data
$id_siswa= $_POST['id_siswa'];
$nisn= $_POST['nisn'];
$nama_siswa= $_POST['nama_siswa'];
$nis= $_POST['nis'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `siswa` SET `nama_siswa`='$nama_siswa',`nisn`='$nisn',`nis`='$nis',`telepon`='$telepon',`alamat`='$alamat' WHERE `id_siswa`=$id_siswa");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=siswa-index");

} else {
    echo mysqli_error($conn);
}

?>

