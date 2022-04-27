<?php 

//db
include '../../koneksi.php';



// start
// hitung jumlah baris
$row_count=count($_POST['id_dtl_kehadiran']);
for ($i=0; $i < $row_count; $i++) { 
    // update
    $result=mysqli_query($conn, "UPDATE `detail_kehadiran` SET `keterangan_kehadiran`='".$_POST['keterangan_kehadiran'][$i]."' WHERE `id_dtl_kehadiran`=".$_POST['id_dtl_kehadiran'][$i]."");
}

// var_dump($_POST);die();



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=detail_kehadiran-index&id_kehadiran=".$_POST['kehadiran_id']."");

} else {
    echo mysqli_error($conn);
}

?>

