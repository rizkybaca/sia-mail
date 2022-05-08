<?php

$pelajaran_kode = $keyj['pelajaran_kode'];
$nilai_id = $keyj['id_nilai'];
$kelas_id = $keyj['id_kelas'];
$kurikulum_id = $keyj['kurikulum_id'];
$thn_akademik_id = $keyj['thn_akademik_id'];

$siswa_nisn = $siswa;
$data_nilai = 0;

//aksi store
$res = mysqli_query($conn, "INSERT INTO `detail_nilai` (`nilai_id`, `siswa_nisn`, `data_nilai`) VALUES ('$nilai_id','$siswa_nisn','$data_nilai')");
