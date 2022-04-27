<?php 
include_once '../koneksi.php';
$kelas_id = $_POST['kelas_id'];

$data = mysqli_query($conn,"SELECT `pelajaran`.*, `guru`.`nama_guru`
FROM `pelajaran`
JOIN `guru`
ON `pelajaran`.`guru_id`=`guru`.`id_guru`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
JOIN `kelas`
ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `kelas`.`id_kelas`='$kelas_id' ");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek>0) {
    while ($key=mysqli_fetch_assoc($data)) {
        echo "<option value='".$key['id_pelajaran']."'>".$key['nama_pelajaran']." - ".$key['nama_guru']."</option>";
    }
}

?>