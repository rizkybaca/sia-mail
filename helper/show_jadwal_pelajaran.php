<?php

$id = $_GET['id_jdwl_pelajaran'];
$dataj = mysqli_query($conn, "SELECT `jadwal_pelajaran`.*, `tahun_akademik`.`nama_akademik`, `tahun_akademik`.`semester`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`, `pelajaran`.`nama_pelajaran`, `guru`.`nama_guru`
FROM `jadwal_pelajaran` 
JOIN `tahun_akademik`
ON `jadwal_pelajaran`.`thn_akademik_id`=`tahun_akademik`.`id_thn_akademik`
JOIN `pelajaran`
ON `jadwal_pelajaran`.`pelajaran_kode`=`pelajaran`.`kode_pelajaran`
JOIN `kelas`
ON `jadwal_pelajaran`.`kelas_id`=`kelas`.`id_kelas`
JOIN `jenjang`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
WHERE `jadwal_pelajaran`.`id_jdwl_pelajaran`='$id' ");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);
