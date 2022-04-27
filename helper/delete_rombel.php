<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_rombel'];
    $data = mysqli_query($conn,"SELECT * FROM `rombel` WHERE `id_rombel`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>