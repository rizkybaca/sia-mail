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
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah rombel</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="rombel/store.php">
                <div class="form-group">
                    <label for="thn_angkatan_id">Tahun Angkatan</label>
                    <select autofocus name="thn_angkatan_id" class="form-control" id="thn_angkatan_id">
                        <option>- pilih tahun angkatan -</option>
                        <?php 
                        include '../helper/index_tahun_angkatan.php';
                        if($cek > 0) :
                            //ambil data seluruh tahun_angkatan
                            while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                            <option value="<?= $key['id_thn_angkatan']; ?>"><?= $key['nama_angkatan']; ?></option>
                        <?php endwhile;?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif;?>
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