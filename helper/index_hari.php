<?php 

$data = mysqli_query($conn,"SELECT * FROM `hari` ORDER BY `hari_ke` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>