<?php
if (!isset($_GET['id_dtl_rombel'])) {
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_detail_rombel.php';

    if ($cekj > 0) :
        $val = mysqli_fetch_assoc($dataj);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h1 mb-0 text-gray-800"></h1>
                <a href="" type="button" class="btn btn-success">batal edit</a>
            </div>

            <!-- Content Row -->

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir edit rombel</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="detail_rombel/store.php">
                        <input type="hidden" name="rombel_id" value="<?= $val['id_dtl_rombel'] ?>">
                        <div class="form-group">
                            <label for="siswa_nisn">Siswa</label>
                            <input class="form-control" readonly type="text" name="siswa_nisn" id="siswa_nisn" value="<?= $val['nama_siswa'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select autofocus name="kelas_id" class="form-control" id="kelas_id">
                                <?php
                                include '../helper/index_kelas.php';

                                if ($cek > 0) :
                                    //ambil data seluruh kelas
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>
                                        <?php
                                        if ($key['id_kelas'] == $val['kelas_id']) :
                                        ?>

                                            <option selected value="<?= $key['id_kelas']; ?>"><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['id_kelas']; ?>"><?= $key['nama_jenjang'] . ' - ' . $key['nama_kelas']; ?></option>
                                        <?php
                                        endif;
                                        ?>

                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>-tidak ada data-</option>
                                <?php endif; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kurikulum_id">Kurikulum</label>
                            <input class="form-control" readonly type="text" name="kurikulum_id" id="kurikulum_id" value="<?= $val['nama_kurikulum'] ?>">
                        </div>
                        <div class="form-group">
                            <label for="thn_akademik_id">Tahun Akademik</label>
                            <input class="form-control" readonly type="text" name="thn_akademik_id" id="thn_akademik_id" value="<?= $val['nama_akademik'] ?>">
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

    else :
        // header('location:../index.php?page=rombel-index');
        echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
        echo '<center><a href="?page=rombel-index">click here to back</a></center></div>
    ';
    endif;
}
?>