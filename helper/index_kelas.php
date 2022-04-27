<?php 

$data = mysqli_query($conn,"SELECT `kelas`.*, `jenjang`.`nama_jenjang`  
FROM `kelas` 
JOIN `jenjang`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
ORDER BY `jenjang`.`nama_jenjang` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>