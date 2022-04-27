<?php 

//db
include '../../koneksi.php';

//get form data
$id_guru= $_POST['id_guru'];
$nip= $_POST['nip'];
$nama_guru= $_POST['nama_guru'];
$kode_guru= $_POST['kode_guru'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `guru` SET `nama_guru`='$nama_guru',`nip`='$nip',`kode_guru`='$kode_guru',`telepon`='$telepon',`alamat`='$alamat' WHERE `id_guru`=$id_guru");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=guru-index");

} else {
    echo mysqli_error($conn);
}

?>

