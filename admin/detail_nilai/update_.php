<?php 

//db
include '../../koneksi.php';

//get form data
$id_dtl_nilai= $_POST['id_dtl_nilai'];
$nilai_id= $_POST['nilai_id'];
$data_nilai= $_POST['data_nilai'];


// var_dump($_POST);die();

//update
$result=mysqli_query($conn, "UPDATE `detail_nilai` SET `data_nilai`='$data_nilai' WHERE `id_dtl_nilai`=$id_dtl_nilai");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=detail_nilai-index&id_nilai=".$nilai_id."");

} else {
    echo mysqli_error($conn);
}
