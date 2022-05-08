<?php
include_once '../koneksi.php';
$kelas_id = $_POST['kelas_id'];
// $jenjang_id = 0;

$datajenjangbykelas = mysqli_query($conn, "SELECT `jenjang`.* FROM `jenjang` JOIN `kelas` ON `kelas`.`jenjang_id`=`jenjang`.`id_jenjang` WHERE `kelas`.`id_kelas`='$kelas_id'");

while ($jenjangnih = mysqli_fetch_assoc($datajenjangbykelas)) {
    $jenjang_id = $jenjangnih['id_jenjang'];
}

    $data = mysqli_query($conn, "SELECT `pelajaran`.*, `guru`.`nama_guru`
FROM `pelajaran`
JOIN `guru`
ON `pelajaran`.`guru_nip`=`guru`.`nip`
JOIN `jenjang`
ON `pelajaran`.`jenjang_id`=`jenjang`.`id_jenjang`
WHERE `pelajaran`.`jenjang_id`='$jenjang_id' ");


// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if ($cek > 0) {
    while ($key = mysqli_fetch_assoc($data)) {
        echo "<option value='" . $key['kode_pelajaran'] . "'>" . $key['nama_pelajaran'] . " - " . $key['nama_guru'] . "</option>";
    }
}
