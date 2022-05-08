<?php

$thn_akademik_id = $_POST['thn_akademik_id'];
$pelajaran_kode = $_POST['pelajaran_kode'];
$kurikulum_id = $_POST['kurikulum_id'];
$kelas_id = $_POST['kelas_id'];

// $guru_id=$_SESSION['id_guru'];

$datask = mysqli_query($conn, "SELECT * 
FROM `pelajaran` 
WHERE `kurikulum_id` 
IN (SELECT `kurikulum_id` 
    FROM  `detail_rombel` 
    WHERE `siswa_nisn`='$siswa_nisn' 
    AND `thn_akademik_id`='$thn_akademik_id')
    ");

// menghitung jumlah data yang ditemukan
$ceksk = mysqli_num_rows($datask);
