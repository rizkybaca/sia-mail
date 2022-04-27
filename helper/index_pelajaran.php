<?php 

$data = mysqli_query($conn,"SELECT `pelajaran`.*, `kurikulum`.`nama_kurikulum`, `guru`.`nama_guru`, `jenjang`.`nama_jenjang`
FROM `pelajaran` 
JOIN `kurikulum`
ON `pelajaran`.`kurikulum_id`=`kurikulum`.`id_kurikulum`
JOIN `guru`
ON `pelajaran`.`guru_id`=`guru`.`id_guru`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
ORDER BY `jenjang`.`nama_jenjang` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>