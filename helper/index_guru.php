<?php 

$data = mysqli_query($conn,"SELECT * FROM `guru` ORDER BY `nama_guru` ASC");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>