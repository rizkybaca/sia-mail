<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah tahun_kademik Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah tahun akademik</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="tahun_akademik/store.php">
                <div class="form-group">
                    <label for="nama">Nama Tahun Akademik</label>
                    <input autofocus required name="nama_akademik" type="text" class="form-control" id="nama" placeholder="masukkan nama tahun akademik">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control" id="semester">
                        <option value="Ganjil">Ganjil</option>
                        <option value="Genap">Genap</option>
                    </select>
                </div>

                <div class="form-group">
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