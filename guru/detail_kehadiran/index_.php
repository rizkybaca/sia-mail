<?php 
if(!isset($_GET['id_kehadiran'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=kehadiran-pre-index">click here to back</a></center></div>
    ';
} else {

?>
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <a href="?page=kehadiran-pre-index" class="btn btn-outline-dark">kembali</a>
    <h1 class="h1 mb-0 text-gray-800"></h1>
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
                        <th>Nama Siswa</th>
                        <th>Status Kehadiran</th>
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
                        include '../helper/index_detail_kehadiran.php';
                        if($cekj > 0) :

                            //ambil data seluruh kelas
                            $no=1;
                            while ($keyj = mysqli_fetch_assoc($dataj)) :
                                // var_dump($key); 
                    ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $keyj['nama_siswa'] ?></td>
                        <td><?= $keyj['keterangan_kehadiran'] ?></td>
                        <td>
                            <a href="?page=detail_kehadiran-edit&id_dtl_kehadiran=<?= $keyj['id_dtl_kehadiran'] ?>" class="badge badge-warning">edit</a>
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

}
?>