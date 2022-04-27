<?php 

$nilai_id=$keydk['nilai_id'];
$id_siswa=$keysk['id_siswa'];

// $guru_id=$_SESSION['id_guru'];

$datack = mysqli_query($conn,"SELECT * FROM `siswa` WHERE `id_siswa`='$id_siswa' AND `id_siswa` NOT IN (SELECT `siswa_id` FROM `detail_nilai` WHERE `nilai_id`='$nilai_id') 
 ");

// menghitung jumlah data yang ditemukan
$cekck = mysqli_num_rows($datack);

?>