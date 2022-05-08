<?php
if (!isset($_GET['id_rombel'])) {
    echo '<center><p class="text-danger"><b>press create button first!</b></p></center>';
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
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah kalender_kademik Cepat</button>
    </div> -->

            <!-- Content Row -->

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir tambah detail rombel</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="detail_rombel/store.php">
                        <input type="hidden" name="rombel_id" value="<?= $val['id_rombel'] ?>">
                        <div class="form-group">
                            <label for="siswa_nisn">Siswa</label>
                            <select autofocus name="siswa_nisn" class="form-control" id="siswa_nisn">
                                <option>- pilih siswa -</option>
                                <?php
                                include '../helper/index_siswa_clear.php';
                                if ($cek > 0) :
                                    //ambil data seluruh siswa
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <option value="<?= $key['nisn']; ?>"><?= $key['nis'] . ' - ' . $key['nama_siswa']; ?></option>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select autofocus name="kelas_id" class="form-control" id="kelas_id">
                                <option>- pilih kelas -</option>
                                <?php
                                include '../helper/index_kelas.php';
                                if ($cek > 0) :
                                    //ambil data seluruh kelas
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <option value="<?= $key['id_kelas']; ?>"><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas']; ?></option>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kurikulum_id">Kurikulum</label>
                            <select autofocus name="kurikulum_id" class="form-control" id="kurikulum_id">
                                <option>- pilih kurikulum -</option>
                                <?php
                                include '../helper/index_kurikulum.php';
                                if ($cek > 0) :
                                    //ambil data seluruh kurikulum
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <option value="<?= $key['id_kurikulum']; ?>"><?= $key['nama_kurikulum']; ?></option>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="thn_akademik_id">Tahun Akademik</label>
                            <select autofocus name="thn_akademik_id" class="form-control" id="thn_akademik_id">
                                <option>- pilih tahun akademik -</option>
                                <?php
                                include '../helper/index_tahun_akademik.php';
                                if ($cek > 0) :
                                    //ambil data seluruh tahun_akademik
                                    while ($key = mysqli_fetch_assoc($data)) :
                                        if ($key['is_active'] == "Y") {
                                            $aktif = "Aktif";
                                        } else {
                                            $aktif = "Tidak Aktif";
                                        }
                                ?>
                                        <option value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'] . ' - ' . $key['semester'] . ' - ' . $aktif; ?></option>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
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