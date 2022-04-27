<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_kelas'];
    $data = mysqli_query($conn,"SELECT * FROM `kelas` WHERE `id_kelas`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>