<?php 
if(!isset($_GET['id_dtl_kehadiran'])){
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=detail_kehadiran-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_detail_kehadiran.php';

if($cekj > 0) :
    $val=mysqli_fetch_assoc($dataj);
?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah detail_kehadiran Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir edit detail kehadiran</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="detail_kehadiran/update.php">
                <input type="hidden" name="id_dtl_kehadiran" value="<?= $val['id_dtl_kehadiran'] ?>">
                <input type="hidden" name="kehadiran_id" value="<?= $val['kehadiran_id'] ?>">
                <div class="form-group">
                  <label for="siswa_id">Nama Siswa</label>
                  <input type="text" readonly name="siswa_id" id="siswa_id" class="form-control" placeholder="masukkan nama siswa" value="<?= $val['nama_siswa']?>">
                </div>
                <div class="form-group">
                    <label for="keterangan_kehadiran">Keterangan</label>
                    <select autofocus name="keterangan_kehadiran" class="form-control" id="keterangan_kehadiran">
                        
                        <?php 
                        if("Hadir"===$val['keterangan_kehadiran']):
                        ?>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                            <option value="Alpa">Alpa</option>
                            <option selected value="Hadir">Hadir</option>
                        <?php 
                        elseif("Sakit"===$val['keterangan_kehadiran']):
                        ?>
                            <option selected value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                            <option value="Alpa">Alpa</option>
                            <option value="Hadir">Hadir</option>
                        <?php 
                        elseif("Izin"===$val['keterangan_kehadiran']):
                        ?>
                            <option value="Sakit">Sakit</option>
                            <option selected value="Izin">Izin</option>
                            <option value="Alpa">Alpa</option>
                            <option value="Hadir">Hadir</option>
                        <?php 
                        elseif("Alpa"===$val['keterangan_kehadiran']):
                        ?>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                            <option selected value="Alpa">Alpa</option>
                            <option value="Hadir">Hadir</option>
                        <?php 
                        elseif("kosong"===$val['keterangan_kehadiran']):
                        ?>
                            <option value="Sakit">Sakit</option>
                            <option value="Izin">Izin</option>
                            <option value="Alpa">Alpa</option>
                            <option value="Hadir">Hadir</option>
                            <option selected value="kosong">Kosong</option>
                        <?php 
                        endif;
                        ?>
                        
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
    // header('location:../index.php?page=detail_kehadiran-index');
    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="?page=detail_kehadiran-index">click here to back</a></center></div>
    ';
endif;
}
?>