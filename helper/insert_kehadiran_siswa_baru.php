<?php

$pelajaran_kode = $keyj['pelajaran_kode'];
$kehadiran_id = $keyj['id_kehadiran'];
$kelas_id = $keyj['id_kelas'];
$kurikulum_id = $keyj['kurikulum_id'];
$thn_akademik_id = $keyj['thn_akademik_id'];
$f = date("Y-m-d");

$siswa_nisn = $siswa;

//aksi store
$res = mysqli_query($conn, "INSERT INTO `detail_kehadiran` (`kehadiran_id`, `siswa_nisn`, `keterangan_kehadiran`) VALUES ('$kehadiran_id', '$siswa_nisn', 'kosong')");
