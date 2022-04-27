<?php 

    $id=$_GET['id_klndr_akademik'];
    $dataj = mysqli_query($conn,"SELECT `kalender_akademik`.* , `tahun_akademik`.`nama_akademik`
    FROM `kalender_akademik`
    JOIN `tahun_akademik`
    ON `tahun_akademik`.`id_thn_akademik`=`kalender_akademik`.`thn_akademik_id`
    WHERE `kalender_akademik`.`id_klndr_akademik`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cekj = mysqli_num_rows($dataj);


?>