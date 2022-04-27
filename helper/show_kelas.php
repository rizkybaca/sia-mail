<?php 

    $id=$_GET['id_kelas'];
    $dataj = mysqli_query($conn,"SELECT `kelas`.* , `jenjang`.`nama_jenjang`
    FROM `kelas`
    JOIN `jenjang`
    ON `jenjang`.`id_jenjang`=`kelas`.`jenjang_id`
    WHERE `kelas`.`id_kelas`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cekj = mysqli_num_rows($dataj);


?>