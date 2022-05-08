<?php 

// $guru_id=$_SESSION['id_guru'];
$pelajaran_kode=$keyjw['pelajaran_kode'];
$kelas_id=$keyjw['kelas_id'];

$dataj = mysqli_query($conn,"SELECT `pelajaran`.*, `kurikulum`.`nama_kurikulum`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`
FROM `pelajaran`
JOIN `kurikulum`
ON `pelajaran`.`kurikulum_id`=`kurikulum`.`id_kurikulum`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `kelas`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `pelajaran`.`kode_pelajaran`='$pelajaran_kode' AND `kelas`.`id_kelas`='$kelas_id'");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);

?>