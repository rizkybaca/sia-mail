<?php 
if(!isset($_GET['id_thn_akademik'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=tahun_akademik-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_tahun_akademik.php';

if($cek > 0) :
    $key=mysqli_fetch_assoc($data);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah tahun_akademik Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit tahun akademik</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="tahun_akademik/update.php">
                <input type="hidden" name="id_thn_akademik" value="<?= $key['id_thn_akademik'] ?>">
                <div class="form-group">
                    <label for="nama">Nama Tahun Akademik</label>
                    <input autofocus required name="nama_akademik" type="text" class="form-control" id="nama" placeholder="masukkan nama tahun akademik" value="<?= $key['nama_akademik'] ?>">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <select name="semester" class="form-control" id="semester">
                        <?php 
                        if ($key['semester']=="Ganjil") {?>
                            <option selected value="Ganjil">Ganjil</option>
                            <option value="Genap">Genap</option>
                        <?php 
                        } elseif($key['semester']=="Genap"){
                        ?>
                            <option value="Ganjil">Ganjil</option>
                            <option selected value="Genap">Genap</option>
                        <?php }
                        ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="semester">Apakah aktif?</label>
                    <?php 
                    if ($key['is_active']=="Y") {?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_true" value="Y" checked>
                        <label class="form-check-label" for="is_active_true">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_false" value="N">
                        <label class="form-check-label" for="is_active_false">
                            Tidak
                        </label>
                    </div>
                    <?php 
                    } elseif($key['semester']=="N"){
                    ?>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_true" value="Y">
                        <label class="form-check-label" for="is_active_true">
                            Ya
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active_false" value="N" checked>
                        <label class="form-check-label" for="is_active_false">
                            Tidak
                        </label>
                    </div>
                    <?php 
                    }
                    ?>
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
    // header('location:../index.php?page=tahun_akademik-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=tahun_akademik-index">click here to back</a></center></div>
    ';
endif;
}
?>