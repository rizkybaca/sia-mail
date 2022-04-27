<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah kurikulum Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah kurikulum</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kurikulum/store.php">
                <div class="form-group">
                    <label for="nama">Nama kurikulum</label>
                    <input autofocus required name="nama_kurikulum" type="text" class="form-control" id="nama" placeholder="masukkan nama kurikulum, misal: K-13 Revisi">
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