<?php
include '../helper/index_tahun_akademik_aktif.php';

if ($cek > 0) {
    $key = mysqli_fetch_assoc($data);
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <!-- Content Row -->

        <!-- datatables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data jadwal pelajaran</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nomor</th>
                                <th>Tahun Akademik</th>
                                <th>Kelas</th>
                                <th>Hari</th>
                                <th>Nama Pelajaran</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Guru Pengampu</th>
                                <th>Ruangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include '../helper/index_jadwal_pelajaran_siswa_all.php';
                            if ($cekjw > 0) :

                                //ambil data seluruh jadwal_pelajaran
                                $no = 1;
                                while ($keyjw = mysqli_fetch_assoc($datajw)) :
                                    // var_dump($keyjw); 
                            ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $keyjw['nama_akademik'] . ' - ' . $keyjw['semester']; ?></td>
                                        <td><?= $keyjw['nama_jenjang'] . ' - ' . $keyjw['nama_kelas']; ?></td>
                                        <td><?= $keyjw['nama_hari'] ?></td>
                                        <td><?= $keyjw['nama_pelajaran'] ?></td>
                                        <td><?= $keyjw['jam_mulai'] ?></td>
                                        <td><?= $keyjw['jam_selesai'] ?></td>
                                        <td><?= $keyjw['nama_guru'] ?></td>
                                        <td><?= $keyjw['ruangan'] ?></td>
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
} ?>