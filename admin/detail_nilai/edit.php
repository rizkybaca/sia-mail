<?php 
if(!isset($_GET['id_dtl_nilai'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=detail_nilai-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_detail_nilai.php';

if($cekj > 0) :
    $val=mysqli_fetch_assoc($dataj);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah detail_nilai Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit detail nilai</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="detail_nilai/update.php">
                <input type="hidden" name="id_dtl_nilai" value="<?= $val['id_dtl_nilai'] ?>">
                <input type="hidden" name="nilai_id" value="<?= $val['nilai_id'] ?>">
                <div class="form-group">
                  <label for="siswa_id">Nama Siswa</label>
                  <input type="text" readonly name="siswa_id" id="siswa_id" class="form-control" placeholder="masukkan nama siswa" value="<?= $val['nama_siswa']?>">
                </div>
                <div class="form-group">
                  <label for="data_nilai">Nilai</label>
                  <input autofocus value="<?= $val['data_nilai']?>" type="text" name="data_nilai" id="data_nilai" class="form-control" placeholder="masukkan nilai">
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

else:
    // header('location:../index.php?page=detail_nilai-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=detail_nilai-index">click here to back</a></center></div>
    ';
endif;
}
?>