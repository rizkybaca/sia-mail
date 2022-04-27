<?php 
if(!isset($_GET['id_guru'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=guru-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_guru.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah Guru Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit guru</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="guru/update.php">
                <input type="hidden" name="id_guru" value="<?= $key['id_guru'] ?>">
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input required name="nip" type="text" class="form-control" id="nip" placeholder="masukkan NIP guru" value="<?= $key['nip'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input required name="nama_guru" type="text" class="form-control" id="nama" placeholder="masukkan nama guru" value="<?= $key['nama_guru'] ?>">
                </div>
                <div class="form-group">
                    <label for="kode_guru">Kode guru</label>
                    <input required name="kode_guru" type="text" class="form-control" id="kode_guru" placeholder="masukkan kode guru" value="<?= $key['kode_guru'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea required name="alamat" class="form-control" id="alamat" rows="3" placeholder="masukkan alamat guru" ><?= $key['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">telepon</label>
                    <input required name="telepon" type="tel" class="form-control" id="telepon" placeholder="masukkan telepon guru" value="<?= $key['telepon'] ?>">
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
    // header('location:../index.php?page=guru-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=guru-index">click here to back</a></center></div>
    ';
endif;
}
?>