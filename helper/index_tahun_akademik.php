<?php 

$data = mysqli_query($conn,"SELECT * FROM `tahun_akademik` ORDER BY `nama_akademik` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>