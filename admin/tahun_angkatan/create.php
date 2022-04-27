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
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah tahun angkatan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="tahun_angkatan/store.php">
                <div class="form-group">
                    <label for="nama">Nama Tahun angkatan</label>
                    <input autofocus required name="nama_angkatan" type="text" class="form-control" id="nama" placeholder="masukkan nama tahun angkatan">
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