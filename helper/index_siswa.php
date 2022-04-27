<?php 

$data = mysqli_query($conn,"SELECT * FROM `siswa` ORDER BY `nama_siswa` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>