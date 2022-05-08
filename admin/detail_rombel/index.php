<?php
if (!isset($_GET['id_rombel'])) {
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_rombel.php';

    if ($cekj > 0) :
        $val = mysqli_fetch_assoc($dataj);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h6 mb-0 text-gray-800"></h1>
                <!-- <a href="?page=detail_rombel-import&id_rombel=<? echo ""; /*$val['id_rombel'] */ ?>" class="btn btn-success">Import siswa ke detail rombel</a> -->
                <a href="?page=detail_rombel-create&id_rombel=<?= $val['id_rombel'] ?>" class="btn btn-success">Tambah Detail Rombel Cepat</a>
            </div>

            <!-- Content Row -->

            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h6 font-weight-bold mb-0 text-gray-800">Rombel Angkatan : <?= $val['nama_angkatan']; ?></h1>
                <!-- <a href="?page=detail_rombel-create" class="btn btn-success">Tambah Detail Rombel Cepat</a> -->
            </div>

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Data detail rombel</h6>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Nomor</th>
                                    <th>Nama Siswa</th>
                                    <th>Kelas</th>
                                    <th>Kurikulum</th>
                                    <th>Tahun Akademik</th>
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
                                include '../helper/index_detail_rombel.php';
                                if ($cek > 0) :

                                    //ambil data seluruh detail_rombel
                                    $no = 1;
                                    while ($key = mysqli_fetch_assoc($data)) :
                                        // var_dump($key); 
                                ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $key['nama_siswa'] ?></td>
                                            <td><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas'] ?></td>
                                            <td><?= $key['nama_kurikulum'] ?></td>
                                            <td><?= $key['nama_akademik'] ?></td>
                                            <td>
                                                <a href="?page=detail_rombel-edit&id_dtl_rombel=<?= $key['id_dtl_rombel'] ?>" class="badge badge-warning">edit</a>
                                                <a href="detail_rombel/delete.php?id_dtl_rombel=<?= $key['id_dtl_rombel'] ?>&id_rombel=<?= $val['id_rombel'] ?>" class="badge badge-danger" onclick="return confirm('are you sure?');">hapus</a>
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

    else :
        // header('location:../index.php?page=kelas-index');
        echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
        echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
    endif;
}
?>