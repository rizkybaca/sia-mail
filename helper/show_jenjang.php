<?php 

    $id=$_GET['id_jenjang'];
    $data = mysqli_query($conn,"SELECT * FROM `jenjang` WHERE `id_jenjang`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>