<?php 

$data = mysqli_query($conn,"SELECT * FROM `jenjang` ORDER BY `nama_jenjang` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>