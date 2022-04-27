<?php 
if(!isset($_GET['id_siswa'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=siswa-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_siswa.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah siswa Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit siswa</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="siswa/update.php">
                <input type="hidden" name="id_siswa" value="<?= $key['id_siswa'] ?>">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input required name="nisn" type="text" class="form-control" id="nisn" placeholder="masukkan nisn siswa" value="<?= $key['nisn'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama Siswa</label>
                    <input required name="nama_siswa" type="text" class="form-control" id="nama" placeholder="masukkan nama siswa" value="<?= $key['nama_siswa'] ?>">
                </div>
                <div class="form-group">
                    <label for="nis">NIS</label>
                    <input required name="nis" type="text" class="form-control" id="nis" placeholder="masukkan NIS" value="<?= $key['nis'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea required name="alamat" class="form-control" id="alamat" rows="3" placeholder="masukkan alamat siswa" ><?= $key['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">telepon</label>
                    <input required name="telepon" type="tel" class="form-control" id="telepon" placeholder="masukkan telepon siswa" value="<?= $key['telepon'] ?>">
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
    // header('location:../index.php?page=siswa-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=siswa-index">click here to back</a></center></div>
    ';
endif;
}
?>