<?php
include '../helper/index_tahun_akademik_aktif.php';

if ($cek > 0) {
    $key = mysqli_fetch_assoc($data);
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <p class=" mb-0 text-gray-800"></p>
            <!-- <a href="?page=pelajaran-create" class="btn btn-success">Tambah Pelajaran Cepat</a> -->
        </div>

        <!-- Content Row -->

        <!-- datatables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data pelajaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Waktu</th>
                                <th>Nama pelajaran</th>
                                <th>Kelas</th>
                                <!-- <th>Kurikulum</th> -->
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
                            include '../helper/index_jadwal_pelajaran_ampu.php';
                            // echo $hari;die();
                            if ($cekjw > 0) :

                                // ambil data seluruh jadwal pelajaran
                                while ($keyjw = mysqli_fetch_assoc($datajw)) :


                                    // echo var_dump($keyjw['']);die();

                                    include '../helper/index_pelajaran_kelas_ampu.php';
                                    if ($cekj > 0) :

                                        //ambil data seluruh pelajaran
                                        $no = 1;
                                        while ($keyj = mysqli_fetch_assoc($dataj)) :

                                            // var_dump($keyj); 
                            ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $keyjw['nama_hari'] . ', ' . $keyjw['jam_mulai'] . ' - ' . $keyjw['jam_selesai'] ?></td>
                                                <td><?= $keyj['nama_pelajaran'] ?></td>
                                                <td><?= $keyj['nama_jenjang'] . ' - ' . $keyj['nama_kelas']; ?></td>
                                                <!-- <td><?php /*$keyj['nama_kurikulum'] */ ?></td> -->
                                                <td>

                                                    <?php
                                                    // date_default_timezone_set('Asia/Jakarta');
                                                    // echo time();
                                                    // echo date('H:i:s');
                                                    if (date('H:i:s') >= $keyjw['jam_mulai'] && date('H:i:s') <= $keyjw['jam_selesai']) :

                                                    ?>

                                                        <form action="?page=kehadiran-index" method="post">
                                                            <input type="hidden" name="pelajaran_kode" value="<?= $keyj['kode_pelajaran'] ?>">
                                                            <input type="hidden" name="kelas_id" value="<?= $keyjw['kelas_id'] ?>">
                                                            <input type="hidden" name="kurikulum_id" value="<?= $keyj['kurikulum_id'] ?>">
                                                            <input type="hidden" name="thn_akademik_id" value="<?= $key['id_thn_akademik'] ?>">
                                                            <button name="submit" type="submit" class="btn btn-success">buka kehadiran</button>
                                                        </form>
                                                    <?php
                                                    else :
                                                    ?>
                                                        <button name="submit" disabled type="submit" class="btn btn-outline-dark">belum waktunya buka kehadiran</button>
                                                    <?php
                                                    endif;
                                                    ?>
                                                </td>
                                            </tr>
                            <?php
                                        endwhile;
                                    endif;
                                endwhile;
                            // else : echo 'YOLO';
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
} ?>