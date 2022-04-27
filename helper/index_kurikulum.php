<?php 

$data = mysqli_query($conn,"SELECT * FROM `kurikulum` ORDER BY `nama_kurikulum` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>