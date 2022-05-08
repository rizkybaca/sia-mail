<?php
if (!isset($_POST['submit'])) {
    echo '<center><p class="text-danger"><b>press buka nilai button first!</b></p></center>';
    echo '<center><a href="?page=nilai-pre-index">click here to back</a></center></div>
    ';
} else {
?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <!-- <a href="?page=nilai-pre-index" class="btn btn-outline-dark">kembali</a> -->
            <form action="" method="post">
                <input type="hidden" name="nip" value="<?= $_SESSION['nip'] ?>">
                <input type="hidden" name="pelajaran_kode" value="<?= $_POST['pelajaran_kode'] ?>">
                <input type="hidden" name="kelas_id" value="<?= $_POST['kelas_id'] ?>">
                <input type="hidden" name="kurikulum_id" value="<?= $_POST['kurikulum_id'] ?>">
                <input type="hidden" name="thn_akademik_id" value="<?= $_POST['thn_akademik_id'] ?>">
                <div class="form-group">
                    <label for="jenis_ujian">Jenis Ujian</label>
                    <select autofocus class="form-control" name="jenis_ujian" id="jenis_ujian">
                        <option>- pilih jenis ujian -</option>
                        <option value="Tugas">Tugas</option>
                        <option value="UTS">UTS</option>
                        <option value="UAS">UAS</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama_tugas">Judul/nama Ujian</label>
                    <input type="text" name="nama_tugas" id="nama_tugas" class="form-control" placeholder="contoh: Tugas Temu 1">
                </div>
                <input class="btn btn-primary" name="kirim" type="submit" value="buat nilai">
            </form>
        </div>

        <!-- Content Row -->

        <!-- datatables -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Data nilai</h6>
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
                        <tbody>
                            <?php
                            include '../helper/index_nilai.php';
                            if ($cekj > 0) :

                                //ambil data seluruh pelajaran
                                $no = 1;
                                while ($keyj = mysqli_fetch_assoc($dataj)) :
                                    // var_dump($keyj); 
                            ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $keyj['nama_pelajaran'] ?></td>
                                        <td><?= $keyj['nama_jenjang'] . ' - ' . $keyj['nama_kelas']; ?></td>
                                        <td><?= $keyj['jenis_ujian'] ?></td>
                                        <td><?= $keyj['nama_tugas'] ?></td>
                                        <td>
                                            <a href="?page=detail_nilai-index&id_nilai=<?= $keyj['id_nilai'] ?>" class="badge badge-success">buka detail nilai siswa</a>
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
} ?>

<?php

if (isset($_POST['kirim'])) {
    include_once '../helper/insert_nilai.php';
}

?>