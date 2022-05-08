<?php

$nilai_id = $keydk['nilai_id'];
$nisn = $keysk['nisn'];

// $guru_id=$_SESSION['id_guru'];

$datack = mysqli_query($conn, "SELECT * FROM `siswa` WHERE `nisn`='$nisn' AND `nisn` NOT IN (SELECT `siswa_nisn` FROM `detail_nilai` WHERE `nilai_id`='$nilai_id') 
 ");

// menghitung jumlah data yang ditemukan
$cekck = mysqli_num_rows($datack);
