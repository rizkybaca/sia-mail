<?php 

    $id=$_GET['id_rombel'];
    $dataj = mysqli_query($conn,"SELECT `rombel`.* , `tahun_angkatan`.`nama_angkatan`
    FROM `rombel`
    JOIN `tahun_angkatan`
    ON `tahun_angkatan`.`id_thn_angkatan`=`rombel`.`thn_angkatan_id`
    WHERE `rombel`.`id_rombel`=".$id ."");

    // menghitung jumlah data yang ditemukan
    $cekj = mysqli_num_rows($dataj);


?>