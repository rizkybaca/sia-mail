<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_detail_rombel'];
    $data = mysqli_query($conn,"SELECT * FROM `detail_rombel` WHERE `id_dtl_rombel`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>