<?php 
date_default_timezone_set('Asia/Jakarta');
// $guru_id=$_SESSION['id_guru'];
$aktif=$key['id_thn_akademik'];
// $hari=date("l");

$datajw = mysqli_query($conn,"SELECT `jadwal_pelajaran`.*, `hari`.`nama_hari` FROM `jadwal_pelajaran` JOIN `pelajaran` ON `jadwal_pelajaran`.`pelajaran_id`=`pelajaran`.`id_pelajaran` JOIN `hari` ON `jadwal_pelajaran`.`hari_id`=`hari`.`id_hari`
WHERE `jadwal_pelajaran`.`thn_akademik_id`='$aktif' 
");

// menghitung jumlah data yang ditemukan
$cekjw = mysqli_num_rows($datajw);

?>