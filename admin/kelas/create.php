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
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah kelas</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kelas/store.php">
                <div class="form-group">
                    <label for="jenjang_id">Jenjang</label>
                    <select name="jenjang_id" class="form-control" id="jenjang_id">
                        <option>- pilih jenjang -</option>
                        <?php 
                        include '../helper/index_jenjang.php';
                        if($cek > 0) :
                            //ambil data seluruh jenjang
                            while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                            <option value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                        <?php endwhile;?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                            <?php endif;?>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input autofocus required name="nama_kelas" type="text" class="form-control" id="nama" placeholder="masukkan nama kelas">
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