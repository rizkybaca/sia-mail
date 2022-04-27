<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">import Guru Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir import guru</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="guru/store_import.php" enctype="multipart/form-data" >
                <div class="form-control-file">
                    <label for="filecsv">Pilih file CSV</label>
                    <input required name="filecsv" type="file" accept=".csv" class="form-control-file" id="filecsv">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <!-- <h1 class="h1 mb-0 text-gray-800"></h1> -->
        <a href="guru/format_guru.csv" download="format_guru" class="btn btn-outline-success">download format csv</a>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->