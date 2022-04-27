<?php 

    //db
    include '../../koneksi.php';

    $id=$_GET['id_thn_angkatan'];
    $data = mysqli_query($conn,"SELECT * FROM `tahun_angkatan` WHERE `id_thn_angkatan`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);

?>