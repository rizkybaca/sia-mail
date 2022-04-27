<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_klndr_akademik'];
    $data = mysqli_query($conn,"SELECT * FROM `kalender_akademik` WHERE `id_klndr_akademik`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>