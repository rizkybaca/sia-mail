<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_pelajaran'];
    $data = mysqli_query($conn,"SELECT * FROM `pelajaran` WHERE `id_pelajaran`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>