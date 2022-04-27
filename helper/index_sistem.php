<?php 

$data = mysqli_query($conn,"SELECT * FROM `profil_sistem`");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

?>