<?php 

$id=$_GET['id_dtl_nilai'];
// $siswa=$_GET['id_siswa'];

$dataj = mysqli_query($conn,"SELECT `detail_nilai`.*, `siswa`.`nama_siswa` FROM `detail_nilai` JOIN `siswa` ON `detail_nilai`.`siswa_id`=`siswa`.`id_siswa` WHERE `detail_nilai`.`id_dtl_nilai`='$id' ");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);

?>