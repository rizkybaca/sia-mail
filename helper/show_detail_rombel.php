<?php

$id = $_GET['id_dtl_rombel'];
$dataj = mysqli_query($conn, "SELECT `detail_rombel`.*, `tahun_angkatan`.`nama_angkatan`, `siswa`.`nama_siswa`, `kelas`.`nama_kelas`, `kurikulum`.`nama_kurikulum`, `tahun_akademik`.`nama_akademik`,`tahun_akademik`.`semester`, `jenjang`.`nama_jenjang`
FROM `detail_rombel`
JOIN `rombel`
ON `detail_rombel`.`rombel_id`=`rombel`.`id_rombel`
JOIN `tahun_angkatan`
ON `rombel`.`thn_angkatan_id`=`tahun_angkatan`.`id_thn_angkatan`
JOIN `siswa`
ON `detail_rombel`.`siswa_nisn`=`siswa`.`nisn`
JOIN `kurikulum`
ON `detail_rombel`.`kurikulum_id`=`kurikulum`.`id_kurikulum`
JOIN `tahun_akademik`
ON `detail_rombel`.`thn_akademik_id`=`tahun_akademik`.`id_thn_akademik`
JOIN `kelas`
ON `detail_rombel`.`kelas_id`=`kelas`.`id_kelas`
JOIN `jenjang`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `detail_rombel`.`id_dtl_rombel`=" . $id . "");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);
