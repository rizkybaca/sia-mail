<?php
if (!isset($_GET['id_nilai'])) {
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=nilai-pre-index">click here to back</a></center></div>
    ';
} else {

?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <a href="?page=nilai-pre-index" class="btn btn-outline-dark">kembali</a>
            <h1 class="h1 mb-0 text-gray-800"></h1>
        </div>

        <!-- Content Row -->

        <!-- datatables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data detail nilai</h6>
            </div>
            <form method="POST" action="detail_nilai/update.php">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Siswa</th>
                                    <th>Nilai</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../helper/index_detail_nilai.php';
                                if ($cekj > 0) :

                                    //ambil data seluruh kelas
                                    $no = 1;
                                    while ($keyj = mysqli_fetch_assoc($dataj)) :
                                        // var_dump($key); 
                                ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $keyj['nama_siswa'] ?></td>
                                            <td>
                                                <input type="hidden" name="id_dtl_nilai[]" value="<?= $keyj['id_dtl_nilai'] ?>">
                                                <input type="hidden" name="nilai_id" value="<?= $keyj['nilai_id'] ?>">
                                                <input autofocus value="<?= $keyj['data_nilai'] ?>" type="text" name="data_nilai[]" id="data_nilai" class="form-control" placeholder="masukkan nilai">
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
                <div class="card-footer py-3 d-flex justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"></h6>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
    </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
<?php

}
?>