<?php 
if(!isset($_GET['id_kelas'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=kelas-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_kelas.php';

if($cekj > 0) :
    $val=mysqli_fetch_assoc($dataj);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah kelas Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit kelas</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kelas/update.php">
                <input type="hidden" name="id_kelas" value="<?= $val['id_kelas'] ?>">
                <div class="form-group">
                    <label for="jenjang_id">Jenjang</label>
                    <select name="jenjang_id" class="form-control" id="jenjang_id">
                        <?php 
                        include '../helper/index_jenjang.php';
                        if($cek > 0) :

                            //ambil data seluruh jenjang
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>

                            <?php 
                            if($key['id_jenjang']==$val['jenjang_id']) :
                            ?>
                                <option selected value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                            <?php 
                            else:
                            ?>
                                <option value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                            <?php 
                            endif;
                            ?>
                        <?php endwhile;?>
                        <?php else : ?>
                            <option>- tidak ada data -</option>
                        <?php endif;?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input autofocus required name="nama_kelas" type="text" class="form-control" id="nama" placeholder="masukkan nama kelas" value="<?= $val['nama_kelas'] ?>">
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
    // header('location:../index.php?page=kelas-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=kelas-index">click here to back</a></center></div>
    ';
endif;
}
?>