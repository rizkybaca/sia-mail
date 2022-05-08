<?php

$data = mysqli_query($conn, "SELECT `rombel`.*, `tahun_angkatan`.`nama_angkatan`  
FROM `rombel` 
JOIN `tahun_angkatan`
ON `rombel`.`thn_angkatan_id`=`tahun_angkatan`.`id_thn_angkatan`
ORDER BY `tahun_angkatan`.`nama_angkatan` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
