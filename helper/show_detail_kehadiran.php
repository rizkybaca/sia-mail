<?php 

$id=$_GET['id_dtl_kehadiran'];
// $siswa=$_GET['id_siswa'];

$dataj = mysqli_query($conn,"SELECT `detail_kehadiran`.*, `siswa`.`nama_siswa` FROM `detail_kehadiran` JOIN `siswa` ON `detail_kehadiran`.`siswa_id`=`siswa`.`id_siswa` WHERE `detail_kehadiran`.`id_dtl_kehadiran`='$id' ");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);

?>