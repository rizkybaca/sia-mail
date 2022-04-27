<?php 

// $id_guru=$_SESSION['id_guru'];

$pelajaran_id=$keyj['pelajaran_id'];
$nilai_id=$keyj['id_nilai'];
$kelas_id=$keyj['id_kelas'];
$kurikulum_id=$keyj['kurikulum_id'];
$thn_akademik_id=$keyj['thn_akademik_id'];
// $nama_pertemuan=$_POST['nama_pertemuan'];
// $f=date("Y-m-d");
// $ff="H:i:s";


//store data nilai
// $result=mysqli_query($conn, "INSERT INTO `nilai` (`nama_pertemuan`, `pelajaran_id`, `thn_akademik_id`, `waktu`) VALUES ('$nama_pertemuan','$pelajaran_id','$thn_akademik_id', '$f' )");

//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

// if ($result) {

    //ambil data nilai yg baru dibuat
    // $a = mysqli_query($conn,"SELECT `nilai`.*, `pelajaran`.`guru_id` FROM `nilai` JOIN `pelajaran` ON `pelajaran`.`id_pelajaran`=`nilai`.`pelajaran_id` WHERE `pelajaran`.`guru_id`='$id_guru' ORDER BY `nilai`.`id_nilai` DESC LIMIT 1");

    // $aa = mysqli_num_rows($a);

    // if ($aa>0) {
        // $aaa=mysqli_fetch_assoc($a);

        // $nilai_id=$aaa['id_nilai'];

        //store data detail_nilai dengan ambil data siswa dahulu
        // $b = mysqli_query($conn,"SELECT * FROM `siswa` WHERE `id_siswa` IN (SELECT `siswa_id` FROM `detail_rombel` WHERE `kelas_id`='$kelas_id' AND `kurikulum_id`='$kurikulum_id' AND `thn_akademik_id`='$thn_akademik_id')");

        // $bb = mysqli_num_rows($b);

        // if ($bb>0) {
            // while ($bbb=mysqli_fetch_assoc($b)) {
                $siswa_id=$siswa;
                $data_nilai=0;

                //aksi store
                $res=mysqli_query($conn, "INSERT INTO `detail_nilai` (`nilai_id`, `siswa_id`, `data_nilai`) VALUES ('$nilai_id','$siswa_id','$data_nilai')");

            // }
        // }

    // }
    // echo "<script>alert('Berhasil membuat nilai');window.location='?page=detail_nilai-index&id_nilai=".$nilai_id."'</script>";
    // header("location:?page=detail_nilai-index&id_nilai=".$nilai_id."");
// } else {
//     echo mysqli_error($conn);
// }

?>