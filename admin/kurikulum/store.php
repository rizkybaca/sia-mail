<?php 

//db
include '../../koneksi.php';

//get form data
$nama_kurikulum= $_POST['nama_kurikulum'];

//insert
$result=mysqli_query($conn, "INSERT INTO `kurikulum` (`nama_kurikulum`) VALUES ('$nama_kurikulum')");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=kurikulum-index");
} else {
    echo mysqli_error($conn);
}

?>