<?php 

    $id=$_GET['id_thn_akademik'];
    $data = mysqli_query($conn,"SELECT * FROM `tahun_akademik` WHERE `id_thn_akademik`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>