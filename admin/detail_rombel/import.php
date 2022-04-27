<?php 
if(!isset($_GET['id_rombel'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_rombel.php';

if($cekj > 0) :
    $val=mysqli_fetch_assoc($dataj);
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">import siswa Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir import siswa ke detail rombel</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="detail_rombel/store_import.php" enctype="multipart/form-data" >
                <div class="custom-file mb-3">
                    <input required name="filecsv" type="file" class="custom-file-input" id="filecsv">
                    <label class="custom-file-label" for="filecsv">Pilih file CSV...</label>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="siswa/berkas/format_siswa.csv" download="format_siswa" class="btn btn-outline-success">download format csv</a>
    </div> -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 

else:
    // header('location:../index.php?page=kelas-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
endif;
}
?>