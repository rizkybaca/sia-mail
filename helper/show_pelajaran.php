<?php 

    $id=$_GET['id_pelajaran'];
    $dataj = mysqli_query($conn,"SELECT `pelajaran`.* , `jenjang`.`nama_jenjang`, `kurikulum`.`nama_kurikulum`, `guru`.`nama_guru`
    FROM `pelajaran`
    JOIN `kurikulum`
    ON `kurikulum`.`id_kurikulum`=`pelajaran`.`kurikulum_id`
    JOIN `guru`
    ON `guru`.`id_guru`=`pelajaran`.`guru_id`
    JOIN `jenjang`
    ON `jenjang`.`id_jenjang`=`pelajaran`.`jenjang_id`
    WHERE `pelajaran`.`id_pelajaran`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cekj = mysqli_num_rows($dataj);


?>