<?php

$thn_akademik_id = $_POST['thn_akademik_id'];
$pelajaran_kode = $_POST['pelajaran_kode'];
$kurikulum_id = $_POST['kurikulum_id'];
$kelas_id = $_POST['kelas_id'];

$guru_nip = $_SESSION['nip'];

$dataj = mysqli_query($conn, "SELECT `nilai`.*, `pelajaran`.`nama_pelajaran`, `kurikulum`.`nama_kurikulum`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`
FROM `nilai`
JOIN `pelajaran`
ON `nilai`.`pelajaran_kode`=`pelajaran`.`kode_pelajaran`
JOIN `kurikulum`
ON `pelajaran`.`kurikulum_id`=`kurikulum`.`id_kurikulum`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `kelas`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `nilai`.`thn_akademik_id`='$thn_akademik_id'
AND `nilai`.`pelajaran_kode`='$pelajaran_kode'
AND `pelajaran`.`kurikulum_id`='$kurikulum_id'
AND `kelas`.`id_kelas`='$kelas_id'
AND `pelajaran`.`guru_nip`='$guru_nip'
 ");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);
