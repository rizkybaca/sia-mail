<?php 

$id=$keyj['id_nilai'];

$datadk = mysqli_query($conn,"SELECT `detail_nilai`.*, `siswa`.`nama_siswa` FROM `detail_nilai` JOIN `siswa` ON `detail_nilai`.`siswa_id`=`siswa`.`id_siswa` WHERE `detail_nilai`.`nilai_id`='$id' ORDER BY `siswa`.`nama_siswa` ASC");

// menghitung jumlah data yang ditemukan
$cekdk = mysqli_num_rows($datadk);

?>