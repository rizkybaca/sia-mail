<?php

// $nip = $_SESSION['nip'];

$nip = $_POST['nip'];
$pelajaran_kode = $_POST['pelajaran_kode'];
$kelas_id = $_POST['kelas_id'];
$kurikulum_id = $_POST['kurikulum_id'];
$thn_akademik_id = $_POST['thn_akademik_id'];
$jenis_ujian = $_POST['jenis_ujian'];
$nama_tugas = $_POST['nama_tugas'];

//store data nilai
$result = mysqli_query($conn, "INSERT INTO `nilai` (`nama_tugas`, `pelajaran_kode`, `thn_akademik_id`, `jenis_ujian`) VALUES ('$nama_tugas','$pelajaran_kode','$thn_akademik_id', '$jenis_ujian' )");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {

    //ambil data nilai yg baru dibuat
    $a = mysqli_query($conn, "SELECT `nilai`.*, `pelajaran`.`guru_nip` FROM `nilai` JOIN `pelajaran` ON `pelajaran`.`kode_pelajaran`=`nilai`.`pelajaran_kode` WHERE `pelajaran`.`guru_nip`='$nip' ORDER BY `nilai`.`id_nilai` DESC LIMIT 1");

    $aa = mysqli_num_rows($a);

    if ($aa > 0) {
        $aaa = mysqli_fetch_assoc($a);

        $nilai_id = $aaa['id_nilai'];

        //store data detail_nilai dengan ambil data siswa dahulu
        $b = mysqli_query($conn, "SELECT * FROM `siswa` WHERE `nisn` IN (SELECT `siswa_nisn` FROM `detail_rombel` WHERE `kelas_id`='$kelas_id' AND `kurikulum_id`='$kurikulum_id' AND `thn_akademik_id`='$thn_akademik_id')");

        $bb = mysqli_num_rows($b);

        if ($bb > 0) {
            while ($bbb = mysqli_fetch_assoc($b)) {
                $siswa_nisn = $bbb['nisn'];
                $data_nilai = 0;

                //aksi store
                $res = mysqli_query($conn, "INSERT INTO `detail_nilai` (`nilai_id`, `siswa_nisn`, `data_nilai`) VALUES ('$nilai_id','$siswa_nisn', '$data_nilai')");
            }
        }
    }
    echo "<script>alert('Berhasil membuat nilai');window.location='?page=detail_nilai-index&id_nilai=" . $nilai_id . "'</script>";
} else {
    echo mysqli_error($conn);
}
