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
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah kalender akademik</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kalender_akademik/store.php">
                <div class="form-group">
                    <label for="nama">Nama Kegiatan</label>
                    <input autofocus required name="nama_kegiatan" type="text" class="form-control" id="nama" placeholder="masukkan nama kegiatan">
                </div>
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai Kegiatan</label>
                    <input required name="waktu_mulai" type="date" class="form-control" id="waktu_mulai" placeholder="masukkan waktu mulai kegiatan">
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai Kegiatan</label>
                    <input required name="waktu_selesai" type="date" class="form-control" id="waktu_selesai" placeholder="masukkan waktu selesai kegiatan">
                </div>
                <div class="form-group">
                    <label for="thn_akademik_id">Tahun Akademik</label>
                    <select name="thn_akademik_id" class="form-control" id="thn_akademik_id">
                        <?php 
                        include '../helper/index_tahun_akademik.php';
                        if($cek > 0) :

                            //ambil data seluruh tahun_akademik
                            while ($key = mysqli_fetch_assoc($data)) :
                            if ($key['is_active']=="Y") {
                                $aktif="Aktif";
                            } elseif ($key['is_active']=="N") {
                                $aktif="Tidak Aktif";
                            }
                                // var_dump($key); 
                        ?>
                            <option value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'].' - '.$key['semester'].' - '.$aktif; ?></option>
                        <?php endwhile;?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif;?>
                    </select>
                </div>

                <!-- <div class="form-group">
                    <label for="semester">Apakah aktif?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_true" value="Y" checked>
                        <label class="form-check-label" for="is_active_true">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_false" value="N">
                        <label class="form-check-label" for="is_active_false">
                            Tidak
                        </label>
                    </div>
                </div> -->
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->