<?php 

//db
include '../../koneksi.php';

//get form data
$id_dtl_kehadiran= $_POST['id_dtl_kehadiran'];
$kehadiran_id= $_POST['kehadiran_id'];
$keterangan_kehadiran= $_POST['keterangan_kehadiran'];


// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `detail_kehadiran` SET `keterangan_kehadiran`='$keterangan_kehadiran' WHERE `id_dtl_kehadiran`=$id_dtl_kehadiran");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=detail_kehadiran-index&id_kehadiran=".$kehadiran_id." ");

} else {
    echo mysqli_error($conn);
}

?>

