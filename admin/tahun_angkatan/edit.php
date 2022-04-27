<?php 
if(!isset($_GET['id_thn_angkatan'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=tahun_angkatan-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_tahun_angkatan.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah tahun_angkatan Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit tahun angkatan</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="tahun_angkatan/update.php">
                <input type="hidden" name="id_thn_angkatan" value="<?= $key['id_thn_angkatan'] ?>">
                <div class="form-group">
                    <label for="nama">Nama Tahun angkatan</label>
                    <input autofocus required name="nama_angkatan" type="text" class="form-control" id="nama" placeholder="masukkan nama tahun angkatan" value="<?= $key['nama_angkatan'] ?>">
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
    // header('location:../index.php?page=tahun_angkatan-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=tahun_angkatan-index">click here to back</a></center></div>
    ';
endif;
}
?>