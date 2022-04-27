<?php 

$data = mysqli_query($conn,"SELECT * FROM `tahun_angkatan` ORDER BY `nama_angkatan` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>