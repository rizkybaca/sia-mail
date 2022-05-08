<?php

$data = mysqli_query($conn, "SELECT `jadwal_pelajaran`.*, `tahun_akademik`.`nama_akademik`, `tahun_akademik`.`semester`, `kelas`.`nama_kelas`, `jenjang`.`nama_jenjang`, `pelajaran`.`nama_pelajaran`, `guru`.`nama_guru`, `hari`.`nama_hari`
FROM `jadwal_pelajaran` 
JOIN `tahun_akademik`
ON `jadwal_pelajaran`.`thn_akademik_id`=`tahun_akademik`.`id_thn_akademik`
JOIN `pelajaran`
ON `jadwal_pelajaran`.`pelajaran_kode`=`pelajaran`.`kode_pelajaran`
JOIN `hari`
ON `jadwal_pelajaran`.`hari_id`=`hari`.`id_hari`
JOIN `kelas`
ON `jadwal_pelajaran`.`kelas_id`=`kelas`.`id_kelas`
JOIN `jenjang`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
ORDER BY `hari`.`hari_ke` ASC, `jadwal_pelajaran`.`jam_mulai`");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
