<?php

// $nip = $_SESSION['nip'];

// echo var_dump($_POST);
// die();

$nip = $_POST['nip'];
$pelajaran_kode = $_POST['pelajaran_kode'];
$kelas_id = $_POST['kelas_id'];
$kurikulum_id = $_POST['kurikulum_id'];
$thn_akademik_id = $_POST['thn_akademik_id'];
$nama_pertemuan = $_POST['nama_pertemuan'];
$f = date("Y-m-d");
// $ff="H:i:s";


//store data kehadiran
$result = mysqli_query($conn, "INSERT INTO `kehadiran` (`nama_pertemuan`, `pelajaran_kode`, `thn_akademik_id`, `waktu`) VALUES ('$nama_pertemuan','$pelajaran_kode','$thn_akademik_id', '$f' )");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {

    //ambil data kehadiran yg baru dibuat
    $a = mysqli_query($conn, "SELECT `kehadiran`.*, `pelajaran`.`guru_nip` FROM `kehadiran` JOIN `pelajaran` ON `pelajaran`.`kode_pelajaran`=`kehadiran`.`pelajaran_kode` WHERE `pelajaran`.`guru_nip`='$nip' ORDER BY `kehadiran`.`id_kehadiran` DESC LIMIT 1");

    $aa = mysqli_num_rows($a);

    if ($aa > 0) {
        $aaa = mysqli_fetch_assoc($a);

        // echo var_dump($aaa['id_kehadiran']);
        // die();

        $kehadiran_id = $aaa['id_kehadiran'];

        //store data detail_kehadiran dengan ambil data siswa dahulu
        $b = mysqli_query($conn, "SELECT * FROM `siswa` WHERE `nisn` IN (SELECT `siswa_nisn` FROM `detail_rombel` WHERE `kelas_id`='$kelas_id' AND `kurikulum_id`='$kurikulum_id' AND `thn_akademik_id`='$thn_akademik_id')");

        $bb = mysqli_num_rows($b);

        if ($bb > 0) {
            while ($bbb = mysqli_fetch_assoc($b)) {
                $siswa_nisn = $bbb['nisn'];

                //aksi store
                $res = mysqli_query($conn, "INSERT INTO `detail_kehadiran` (`kehadiran_id`, `siswa_nisn`) VALUES ('$kehadiran_id','$siswa_nisn')");
            }
        }
    }
    echo "<script>alert('Berhasil membuat kehadiran');window.location='?page=detail_kehadiran-index&id_kehadiran=" . $kehadiran_id . "'</script>";
    // header("location:?page=detail_kehadiran-index&id_kehadiran=".$kehadiran_id."");
    // header("location:?page=kehadiran-pre-index");
} else {
    echo mysqli_error($conn);
}
