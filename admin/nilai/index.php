
<?php 
if(!isset($_POST['submit'])){
    echo '<center><p class="text-danger"><b>press buka nilai button first!</b></p></center>';
    echo '<center><a href="?page=nilai-pre-index">click here to back</a></center></div>
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
    <a href="?page=nilai-pre-index" class="btn btn-outline-dark">kembali</a>
    <form action="?page=nilai-rekap" method="post">
        <input type="hidden" name="pelajaran_id" value="<?= $_POST['pelajaran_id'] ?>">
        <input type="hidden" name="kelas_id" value="<?= $_POST['kelas_id'] ?>">
        <input type="hidden" name="kurikulum_id" value="<?= $_POST['kurikulum_id'] ?>">
        <input type="hidden" name="thn_akademik_id" value="<?= $_POST['thn_akademik_id'] ?>">
        <button name="submit" type="submit" class="btn btn-outline-success">Rekap nilai</button>
    </form>
    <!-- <a href="?page=nilai-rekap" class="btn btn-outline-success">Rekap nilai</a> -->
</div>

<!-- Content Row -->

<!-- datatables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data  nilai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama pelajaran</th>
                        <th>Kelas</th>
                        <th>Jenis Ujian</th>
                        <th>Nama Ujian</th>
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
                        include '../helper/index_nilai_admin.php';
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
                        <td><?= $keyj['jenis_ujian'] ?></td>
                        <td><?= $keyj['nama_tugas'] ?></td>
                        <td>
                            <a href="?page=detail_nilai-index&id_nilai=<?= $keyj['id_nilai'] ?>" class="badge badge-warning">edit</a>
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

