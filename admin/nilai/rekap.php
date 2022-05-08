<?php
if (!isset($_POST['submit'])) {
    echo '<center><p class="text-danger"><b>press rekap nilai button first!</b></p></center>';
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
            <a href="?page=nilai-pre-index" class="btn btn-outline-dark">kembali</a>
            <h1 class="h1 mb-0 text-gray-800"></h1>
        </div>

        <!-- Content Row -->

        <!-- datatables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data rekap nilai</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Nama Siswa</th>
                                <?php
                                include '../helper/index_nilai_admin.php';
                                if ($cekj > 0) :

                                    //ambil data seluruh pelajaran
                                    $no = 1;
                                    while ($keyj = mysqli_fetch_assoc($dataj)) :
                                        // var_dump($keyj); 
                                ?>
                                        <th><?= $keyj['jenis_ujian'] . ', ' . $keyj['nama_tugas'] ?></th>
                                <?php
                                    endwhile;
                                endif;
                                ?>
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
                            include '../helper/index_siswa_nilai_admin.php';
                            if ($ceksk > 0) :

                                //ambil data seluruh pelajaran
                                $no = 1;
                                while ($keysk = mysqli_fetch_assoc($datask)) :
                            ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $keysk['nama_siswa'] ?></td>
                                        <?php
                                        include '../helper/index_nilai_admin.php';
                                        if ($cekj > 0) :
                                            while ($keyj = mysqli_fetch_assoc($dataj)) :

                                                include '../helper/index_detail_nilai_admin.php';
                                                if ($cekdk > 0) :

                                                    while ($keydk = mysqli_fetch_assoc($datadk)) :
                                                        include '../helper/cek_detail_nilai_siswa.php';
                                                        $siswa = "";
                                                        while ($keyck = mysqli_fetch_assoc($datack)) {
                                                            $siswa = $keyck['nisn'];
                                                        }

                                                        if ($keysk['nisn'] == $keydk['siswa_nisn']) : ?>
                                                            <td><?= $keydk['data_nilai']; ?></td>
                                                        <?php


                                                        elseif ($keysk['nisn'] == $siswa) : ?>
                                                            <?php
                                                            include_once '../helper/insert_nilai_siswa_baru.php';
                                                            ?>
                                                            <?= $keydk['data_nilai']; ?>
                                        <?php
                                                        endif;
                                                    endwhile;
                                                endif;
                                            endwhile;
                                        endif;
                                        ?>
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
} ?>