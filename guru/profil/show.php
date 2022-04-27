<?php 
if(!isset($_SESSION['id_guru'])){
    echo '<center><p class="text-danger"><b>login first!</b></p></center>';
    echo '<center><a href="../logout.php">click here to logout!</a></center></div>
    ';
} else {
    include '../helper/show_profil.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=profil-edit" class="btn btn-outline-success">Edit Profile</a>
        <a href="?page=password-edit" class="btn btn-outline-success">Edit Password</a>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil anda</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="guru/update.php">
                <!-- <input type="hidden" name="id_guru" value="<?= $key['id_guru'] ?>"> -->
                <div class="form-group">
                    <label for="nip">NIP</label>
                    <input readonly name="nip" type="text" class="form-control" id="nip" placeholder="masukkan NIP guru" value="<?= $key['nip'] ?>">
                </div>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input readonly name="nama_guru" type="text" class="form-control" id="nama" placeholder="masukkan nama guru" value="<?= $key['nama_guru'] ?>">
                </div>
                <div class="form-group">
                    <label for="kode_guru">Kode guru</label>
                    <input readonly name="kode_guru" type="text" class="form-control" id="kode_guru" placeholder="masukkan kode guru" value="<?= $key['kode_guru'] ?>">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea readonly name="alamat" class="form-control" id="alamat" rows="3" placeholder="masukkan alamat guru" ><?= $key['alamat'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input readonly name="telepon" type="text" class="form-control" id="telepon" placeholder="masukkan telepon guru" value="<?= $key['telepon'] ?>">
                </div>
                <br>
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </form>
        </div>
        
    </div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=profil-edit" class="btn btn-outline-success mr-3">Edit Profile</a>
        <a href="?page=password-edit" class="btn btn-outline-danger">Edit Password</a>
    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 

else:
    // header('location:../index.php?page=guru-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=home">click here to back</a></center></div>
    ';
endif;
}
?>