<?php 
if(!isset($_GET['id_klndr_akademik'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=kalender_akademik-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_kalender_akademik.php';

if($cekj > 0) :
    $val=mysqli_fetch_assoc($dataj);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah kalender_akademik Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit kalender akademik</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="kalender_akademik/update.php">
                <input type="hidden" name="id_klndr_akademik" value="<?= $val['id_klndr_akademik'] ?>">
                <div class="form-group">
                    <label for="nama">Nama Kegiatan</label>
                    <input autofocus required name="nama_kegiatan" type="text" class="form-control" id="nama" placeholder="masukkan nama kegiatan" value="<?= $val['nama_kegiatan'] ?>">
                </div>
                <div class="form-group">
                    <label for="waktu_mulai">Waktu Mulai Kegiatan</label>
                    <input required name="waktu_mulai" type="date" class="form-control" id="waktu_mulai" placeholder="masukkan waktu mulai kegiatan" value="<?= $val['waktu_mulai'] ?>">
                </div>
                <div class="form-group">
                    <label for="waktu_selesai">Waktu Selesai Kegiatan</label>
                    <input required name="waktu_selesai" type="date" class="form-control" id="waktu_selesai" placeholder="masukkan waktu selesai kegiatan" value="<?= $val['waktu_selesai'] ?>">
                </div>
                <div class="form-group">
                    <label for="thn_akademik_id">Tahun Akademik</label>
                    <select name="thn_akademik_id" class="form-control" id="thn_akademik_id">
                        <?php 
                        include '../helper/index_tahun_akademik.php';
                        if($cek > 0) :

                            //ambil data seluruh tahun_akademik
                            while ($key = mysqli_fetch_assoc($data)) :
                            if ($key['is_active']=="Y") {
                                $aktif="Aktif";
                            } elseif ($key['is_active']=="N") {
                                $aktif="Tidak Aktif";
                            }
                                // var_dump($key); 
                        ?>

                            <?php 
                            if($key['id_thn_akademik']==$val['thn_akademik_id']) :
                            ?>
                                <option selected value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'].' - '.$key['semester'].' - '.$aktif; ?></option>
                            <?php 
                            else:
                            ?>
                                <option value="<?= $key['id_thn_akademik']; ?>"><?= $key['nama_akademik'].' - '.$key['semester'].' - '.$aktif; ?></option>
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
    // header('location:../index.php?page=kalender_akademik-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=kalender_akademik-index">click here to back</a></center></div>
    ';
endif;
}
?>