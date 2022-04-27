
<?php 
if(!isset($_POST['submit'])){
    echo '<center><p class="text-danger"><b>press buka kehadiran button first!</b></p></center>';
    echo '<center><a href="?page=kehadiran-pre-index">click here to back</a></center></div>
    ';
} else {
    // var_dump($_POST);die();
//     include '../helper/index_tahun_akademik_aktif.php';

// if($cek > 0) :
//     $key=mysqli_fetch_assoc($data);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h1 mb-0 text-gray-800"></h1> -->
    <a href="?page=kehadiran-pre-index" class="btn btn-outline-dark">kembali</a>
    <form action="?page=kehadiran-rekap" method="post">
        <input type="hidden" name="pelajaran_id" value="<?= $_POST['pelajaran_id'] ?>">
        <input type="hidden" name="kelas_id" value="<?= $_POST['kelas_id'] ?>">
        <input type="hidden" name="kurikulum_id" value="<?= $_POST['kurikulum_id'] ?>">
        <input type="hidden" name="thn_akademik_id" value="<?= $_POST['thn_akademik_id'] ?>">
        <button name="submit" type="submit" class="btn btn-outline-success">Rekap kehadiran</button>
    </form>
    <!-- <a href="?page=kehadiran-rekap" class="btn btn-outline-success">Rekap kehadiran</a> -->
</div>

<!-- Content Row -->

<!-- datatables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data detail kehadiran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama pelajaran</th>
                        <th>Kelas</th>
                        <th>Nama Pertemuan</th>
                        <th>Waktu</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>NIP</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> -->
                <tbody>
                    <?php 
                        include '../helper/index_kehadiran_admin.php';
                        if($cekj > 0) :

                            //ambil data seluruh pelajaran
                            $no=1;
                            while ($keyj = mysqli_fetch_assoc($dataj)) :
                                // var_dump($keyj); 
                    ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $keyj['nama_pelajaran'] ?></td>
                        <td><?= $keyj['nama_jenjang'].' - '.$keyj['nama_kelas']; ?></td>
                        <td><?= $keyj['nama_pertemuan'] ?></td>
                        <td><?= $keyj['waktu'] ?></td>
                        <td>
                            <a href="?page=detail_kehadiran-index&id_kehadiran=<?= $keyj['id_kehadiran'] ?>" class="badge badge-warning">edit</a>
                        </td>
                    </tr>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php 

// endif;
}?>

<?php 

if (isset($_POST['kirim'])) {
    include_once '../helper/insert_kehadiran.php';


}

?>
