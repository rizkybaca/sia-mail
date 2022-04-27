<?php 

//db
include '../../koneksi.php';

//get form data
$id_kurikulum= $_POST['id_kurikulum'];
$nama_kurikulum= $_POST['nama_kurikulum'];

// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `kurikulum` SET `nama_kurikulum`='$nama_kurikulum' WHERE `id_kurikulum`=$id_kurikulum");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kurikulum-index");

} else {
    echo mysqli_error($conn);
}

?>

