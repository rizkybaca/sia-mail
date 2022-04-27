<?php 
if(!isset($_GET['id_jenjang'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=jenjang-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_jenjang.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah jenjang Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit jenjang</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="jenjang/update.php">
                <input type="hidden" name="id_jenjang" value="<?= $key['id_jenjang'] ?>">
                <div class="form-group">
                    <label for="nama">Nama jenjang</label>
                    <input autofocus required name="nama_jenjang" type="text" class="form-control" id="nama" placeholder="masukkan nama jenjang" value="<?= $key['nama_jenjang'] ?>">
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
    // header('location:../index.php?page=jenjang-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=jenjang-index">click here to back</a></center></div>
    ';
endif;
}
?>