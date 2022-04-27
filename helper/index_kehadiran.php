<?php 

$thn_akademik_id=$_POST['thn_akademik_id'];
$pelajaran_id=$_POST['pelajaran_id'];
$kurikulum_id=$_POST['kurikulum_id'];
$kelas_id=$_POST['kelas_id'];

$guru_id=$_SESSION['id_guru'];

$dataj = mysqli_query($conn,"SELECT `kehadiran`.*, `pelajaran`.`nama_pelajaran`, `kurikulum`.`nama_kurikulum`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`
FROM `kehadiran`
JOIN `pelajaran`
ON `kehadiran`.`pelajaran_id`=`pelajaran`.`id_pelajaran`
JOIN `kurikulum`
ON `pelajaran`.`kurikulum_id`=`kurikulum`.`id_kurikulum`
JOIN `guru`
ON `pelajaran`.`guru_id`=`guru`.`id_guru`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `kelas`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `kehadiran`.`thn_akademik_id`='$thn_akademik_id'
AND `kehadiran`.`pelajaran_id`='$pelajaran_id'
AND `pelajaran`.`kurikulum_id`='$kurikulum_id'
AND `kelas`.`id_kelas`='$kelas_id'
AND `pelajaran`.`guru_id`='$guru_id'
 ");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);

?>