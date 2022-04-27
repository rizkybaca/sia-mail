<?php 

include '../helper/index_sistem.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Profil sistem</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="sistem/update.php">
                <!-- <input type="hidden" name="id_sistem" value="<?= $key['id_sistem'] ?>"> -->
                <div class="form-group">
                    <label for="nama_sistem">nama_sistem</label>
                    <input readonly name="nama_sistem" type="text" class="form-control" id="nama_sistem" placeholder="masukkan nama_sistem sistem" value="<?= $key['nama_sistem'] ?>">
                </div>
                <div class="form-group">
                    <label for="versi">versi</label>
                    <textarea readonly name="versi" class="form-control" id="versi" rows="3" placeholder="masukkan versi sistem" ><?= $key['versi'] ?></textarea>
                </div>
                <div class="form-group">
                    <label for="pengembang">pengembang</label>
                    <textarea readonly name="pengembang" class="form-control" id="pengembang" rows="3" placeholder="masukkan pengembang sistem" ><?= $key['pengembang'] ?></textarea>
                </div>
                <!-- sementara logo sistem manual 1280 × 720 px -->
                <img src="../img/logo_sistem.png">
                <br>
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
            </form>
        </div>
        
    </div>

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-start mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=sistem-edit" class="btn btn-outline-success mr-3">Edit sisteme</a>
    </div>

    

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php 

else:
    // header('location:../index.php?page=sistem-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=home">click here to back</a></center></div>
    ';
endif;

?>