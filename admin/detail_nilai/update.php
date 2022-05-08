<?php

//db
include '../../koneksi.php';



// start
// hitung jumlah baris
$row_count = count($_POST['id_dtl_nilai']);
for ($i = 0; $i < $row_count; $i++) {
    $result = mysqli_query($conn, "UPDATE `detail_nilai` SET `data_nilai`='" . $_POST['data_nilai'][$i] . "' WHERE `id_dtl_nilai`=" . $_POST['id_dtl_nilai'][$i] . "");
}

// var_dump($_POST);die();

//update




//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    header("location:../index.php?page=detail_nilai-index&id_nilai=" . $_POST['nilai_id'] . "");
} else {
    echo mysqli_error($conn);
}
