<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_jdwl_pelajaran'];
    $data = mysqli_query($conn,"SELECT * FROM `jadwal_pelajaran` WHERE `id_jdwl_pelajaran`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>