<?php 

    $id=$_GET['id_siswa'];
    $data = mysqli_query($conn,"SELECT * FROM `siswa` WHERE `id_siswa`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>