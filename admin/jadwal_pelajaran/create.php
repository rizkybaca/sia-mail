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
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah jadwal pelajaran</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="jadwal_pelajaran/store.php">
                <div class="form-group">
                    <label for="thn_akademik_id">Tahun Akademik</label>
                    <select name="thn_akademik_id" class="form-control" id="thn_akademik_id">
                        <option>- pilih tahun akademik -</option>
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
                                <option value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'] . ' - ' . $key['semester'] . ' - ' . $aktif; ?></option>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="kelas_id">Kelas</label>
                    <select name="kelas_id" class="form-control" id="kelas_id">
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
                    <label for="hari_id">Hari</label>
                    <select name="hari_id" class="form-control" id="hari_id">
                        <option>- pilih hari -</option>
                        <?php
                        include '../helper/index_hari.php';
                        if ($cek > 0) :
                            //ambil data seluruh hari
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>
                                <option value="<?= $key['id_hari']; ?>"><?= $key['nama_hari']; ?></option>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="pelajaran_kode">Pelajaran</label>
                    <select name="pelajaran_kode" class="form-control" id="pelajaran_kode">
                        <option>- pilih pelajaran -</option>

                    </select>
                </div>

                <div class="form-group">
                    <label for="jam_mulai">Jam Mulai</label>
                    <input required name="jam_mulai" type="time" class="form-control" id="jam_mulai" placeholder="masukkan waktu mulai">
                </div>
                <div class="form-group">
                    <label for="jam_selesai">Jam Selesai</label>
                    <input required name="jam_selesai" type="time" class="form-control" id="jam_selesai" placeholder="masukkan waktu selesai">
                </div>
                <div class="form-group">
                    <label for="ruangan">Ruangan</label>
                    <input required name="ruangan" type="text" class="form-control" id="ruangan" placeholder="masukkan ruangan">
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