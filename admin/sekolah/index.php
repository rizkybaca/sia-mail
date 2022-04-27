<?php 

include '../helper/index_sekolah.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil Sekolah</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="sekolah/update.php">
                <!-- <input type="hidden" name="id_sekolah" value="<?= $key['id_sekolah'] ?>"> -->
                <div class="form-group">
                    <label for="nama_sekolah">nama_sekolah</label>
                    <input readonly name="nama_sekolah" type="text" class="form-control" id="nama_sekolah" placeholder="masukkan nama_sekolah sekolah" value="<?= $key['nama_sekolah'] ?>">
                </div>
                <div class="form-group">
                    <label for="visi">visi</label>
                    <textarea readonly name="visi" class="form-control" id="visi" rows="3" placeholder="masukkan visi sekolah" ><?= $key['visi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="misi">misi</label>
                    <textarea readonly name="misi" class="form-control" id="misi" rows="3" placeholder="masukkan misi sekolah" ><?= $key['misi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="tujuan">tujuan</label>
                    <textarea readonly name="tujuan" class="form-control" id="tujuan" rows="3" placeholder="masukkan tujuan sekolah" ><?= $key['tujuan'] ?></textarea>
                </div>
                <!-- sementara logo sekolah manual 1280 × 720 px -->
                <img src="../img/logo_sekolah.png">
                <br>
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </form>
        </div>
        
    </div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=sekolah-edit" class="btn btn-outline-success mr-3">Edit sekolahe</a>
    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 

else:
    // header('location:../index.php?page=sekolah-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=home">click here to back</a></center></div>
    ';
endif;

?>