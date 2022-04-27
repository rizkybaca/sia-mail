<?php 

    $id=$_GET['id_kurikulum'];
    $data = mysqli_query($conn,"SELECT * FROM `kurikulum` WHERE `id_kurikulum`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>