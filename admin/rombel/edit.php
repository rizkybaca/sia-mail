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
        <button type="button" class="btn btn-success">Tambah rombel Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit rombel</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="rombel/update.php">
                <input type="hidden" name="id_rombel" value="<?= $val['id_rombel'] ?>">
                <div class="form-group">
                    <label for="thn_angkatan_id">Tahun Angkatan</label>
                    <select autofocus name="thn_angkatan_id" class="form-control" id="thn_angkatan_id">
                        <?php 
                        include '../helper/index_tahun_angkatan.php';
                        if($cek > 0) :
                            //ambil data seluruh tahun_angkatan
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>
                        <?php 
                        if($key['id_thn_angkatan']==$val['thn_angkatan_id']):
                        ?>

                            <option selected value="<?= $key['id_thn_angkatan']; ?>"><?= $key['nama_angkatan']; ?></option>
                        <?php 
                        else:
                        ?>
                            <option value="<?= $key['id_thn_angkatan']; ?>"><?= $key['nama_angkatan']; ?></option>
                        <?php 
                        endif;
                        ?>
                        <?php endwhile;?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif;?>
                    </select>
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
    // header('location:../index.php?page=rombel-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
endif;
}
?>