<?php
date_default_timezone_set('Asia/Jakarta');
$siswa_nisn = $_SESSION['nisn'];
$aktif = $key['id_thn_akademik'];
$hari = date("l");

$datajw = mysqli_query($conn, "SELECT `jadwal_pelajaran`.*, `tahun_akademik`.`nama_akademik`, `tahun_akademik`.`semester`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`, `pelajaran`.`nama_pelajaran`, `guru`.`nama_guru`, `hari`.`nama_hari` FROM `jadwal_pelajaran` 
JOIN `pelajaran` 
ON `jadwal_pelajaran`.`pelajaran_kode`=`pelajaran`.`kode_pelajaran` 
JOIN `tahun_akademik`
ON `jadwal_pelajaran`.`thn_akademik_id`=`tahun_akademik`.`id_thn_akademik`
JOIN `hari` 
ON `jadwal_pelajaran`.`hari_id`=`hari`.`id_hari` 
JOIN `kelas` 
ON `jadwal_pelajaran`.`kelas_id`=`kelas`.`id_kelas`
JOIN `detail_rombel` 
ON `detail_rombel`.`kelas_id`=`kelas`.`id_kelas`
JOIN `jenjang`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
WHERE `jadwal_pelajaran`.`thn_akademik_id`='$aktif' 
AND `detail_rombel`.`siswa_nisn`='$siswa_nisn'
");

// menghitung jumlah data yang ditemukan
$cekjw = mysqli_num_rows($datajw);
