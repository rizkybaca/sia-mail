<?php

$data = mysqli_query($conn, "SELECT * FROM `siswa` WHERE `nisn` NOT IN (SELECT `siswa_nisn` FROM `detail_rombel`) ORDER BY `siswa`.`nama_siswa` ASC ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
