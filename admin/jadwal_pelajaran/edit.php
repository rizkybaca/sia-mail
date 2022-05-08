<?php
if (!isset($_GET['id_jdwl_pelajaran'])) {
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=jadwal_pelajaran-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_jadwal_pelajaran.php';

    if ($cekj > 0) :
        $val = mysqli_fetch_assoc($dataj);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah jadwal_pelajaran Cepat</button>
    </div> -->

            <!-- Content Row -->

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir edit jadwal pelajaran</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="jadwal_pelajaran/update.php">
                        <input type="hidden" name="id_jdwl_pelajaran" value="<?= $val['id_jdwl_pelajaran'] ?>">

                        <div class="form-group">
                            <label for="thn_akademik_id">Tahun Akademik</label>
                            <select name="thn_akademik_id" class="form-control" id="thn_akademik_id">
                                <?php
                                include '../helper/index_tahun_akademik.php';
                                if ($cek > 0) :
                                    //ambil data seluruh tahun_akademik
                                    while ($key = mysqli_fetch_assoc($data)) :
                                        if ($key['is_active'] == "Y") {
                                            $aktif = "Aktif";
                                        } elseif ($key['is_active'] == "N") {
                                            $aktif = "Tidak Aktif";
                                        }
                                ?>
                                        <?php
                                        if ($key['id_thn_akademik'] == $val['thn_akademik_id']) :
                                        ?>
                                            <option selected value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'] . ' - ' . $key['semester'] . ' - ' . $aktif; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'] . ' - ' . $key['semester'] . ' - ' . $aktif; ?></option>
                                        <?php endif; ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select name="kelas_id" class="form-control" id="kelas_id">
                                <?php
                                include '../helper/index_kelas.php';
                                if ($cek > 0) :
                                    //ambil data seluruh kelas
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <?php
                                        if ($key['id_kelas'] == $val['kelas_id']) :
                                        ?>
                                            <option selected value="<?= $key['id_kelas']; ?>"><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['id_kelas']; ?>"><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="hari_id">Hari</label>
                            <select name="hari_id" class="form-control" id="hari_id">
                                <?php
                                include '../helper/index_hari.php';
                                if ($cek > 0) :
                                    //ambil data seluruh hari
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <?php
                                        if ($key['id_hari'] == $val['hari_id']) :
                                        ?>
                                            <option selected value="<?= $key['id_hari']; ?>"><?= $key['nama_hari']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['id_hari']; ?>"><?= $key['nama_hari']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pelajaran_kode">Pelajaran</label>
                            <select name="pelajaran_kode" class="form-control" id="pelajaran_kode">
                                <?php
                                include '../helper/index_pelajaran.php';
                                if ($cek > 0) :
                                    //ambil data seluruh pelajaran
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <?php
                                        if ($key['kode_pelajaran'] == $val['pelajaran_kode']) :
                                        ?>
                                            <option selected value="<?= $key['kode_pelajaran']; ?>"><?= $key['nama_pelajaran']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['kode_pelajaran']; ?>"><?= $key['nama_pelajaran']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jam_mulai">Jam Mulai</label>
                            <input required name="jam_mulai" type="time" class="form-control" id="jam_mulai" value="<?= $val['jam_mulai'] ?>" placeholder="masukkan waktu mulai">
                        </div>
                        <div class="form-group">
                            <label for="jam_selesai">Jam Selesai</label>
                            <input required name="jam_selesai" type="time" value="<?= $val['jam_selesai'] ?>" class="form-control" id="jam_selesai" placeholder="masukkan waktu selesai">
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input required name="ruangan" type="text" value="<?= $val['ruangan'] ?>" class="form-control" id="ruangan" placeholder="masukkan ruangan">
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
        // header('location:../index.php?page=pelajaran-index');
        echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
        echo '<center><a href="?page=pelajaran-index">click here to back</a></center></div>
    ';
    endif;
}
?>