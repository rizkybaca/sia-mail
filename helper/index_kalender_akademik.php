<?php 

$data = mysqli_query($conn,"SELECT `kalender_akademik`.*, `tahun_akademik`.`nama_akademik`, `tahun_akademik`.`semester`  
FROM `kalender_akademik` 
JOIN `tahun_akademik`
ON `kalender_akademik`.`thn_akademik_id`=`tahun_akademik`.`id_thn_akademik`
ORDER BY `kalender_akademik`.`waktu_mulai` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>