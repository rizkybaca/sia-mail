<?php 

$id=$_GET['id_kehadiran'];

$dataj = mysqli_query($conn,"SELECT `detail_kehadiran`.*, `siswa`.`nama_siswa` FROM `detail_kehadiran` JOIN `siswa` ON `detail_kehadiran`.`siswa_id`=`siswa`.`id_siswa` WHERE `detail_kehadiran`.`kehadiran_id`='$id' ORDER BY `siswa`.`nama_siswa` ASC");

// menghitung jumlah data yang ditemukan
$cekj = mysqli_num_rows($dataj);

?>