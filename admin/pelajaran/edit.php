<?php
if (!isset($_GET['id_pelajaran'])) {
    echo '<center><p class="text-danger"><b>press edit button first!</b></p></center>';
    echo '<center><a href="?page=pelajaran-index">click here to back</a></center></div>
    ';
} else {
    include '../helper/show_pelajaran.php';

    if ($cekj > 0) :
        $val = mysqli_fetch_assoc($dataj);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah pelajaran Cepat</button>
    </div> -->

            <!-- Content Row -->

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Formulir edit pelajaran</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="pelajaran/update.php">
                        <input type="hidden" name="id_pelajaran" value="<?= $val['id_pelajaran'] ?>">

                        <div class="form-group">
                            <label for="nama">Nama pelajaran</label>
                            <input autofocus required name="nama_pelajaran" type="text" class="form-control" id="nama" placeholder="masukkan nama pelajaran" value="<?= $val['nama_pelajaran'] ?>">
                        </div>

                        <div class="form-group">
                            <label for="kurikulum_id">kurikulum</label>
                            <select name="kurikulum_id" class="form-control" id="kurikulum_id">
                                <?php
                                include '../helper/index_kurikulum.php';
                                if ($cek > 0) :

                                    //ambil data seluruh kurikulum
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>

                                        <?php
                                        if ($key['id_kurikulum'] == $val['kurikulum_id']) :
                                        ?>
                                            <option selected value="<?= $key['id_kurikulum']; ?>"><?= $key['nama_kurikulum']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['id_kurikulum']; ?>"><?= $key['nama_kurikulum']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>- tidak ada data -</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="jenjang_id">jenjang</label>
                            <select name="jenjang_id" class="form-control" id="jenjang_id">
                                <?php
                                include '../helper/index_jenjang.php';
                                if ($cek > 0) :

                                    //ambil data seluruh jenjang
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>

                                        <?php
                                        if ($key['id_jenjang'] == $val['jenjang_id']) :
                                        ?>
                                            <option selected value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>- tidak ada data -</option>
                                <?php endif; ?>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="guru_nip">guru</label>
                            <select name="guru_nip" class="form-control" id="guru_nip">
                                <?php
                                include '../helper/index_guru.php';
                                if ($cek > 0) :

                                    //ambil data seluruh guru
                                    while ($key = mysqli_fetch_assoc($data)) :
                                ?>

                                        <?php
                                        if ($key['nip'] == $val['guru_nip']) :
                                        ?>
                                            <option selected value="<?= $key['nip']; ?>"><?= $key['nama_guru']; ?></option>
                                        <?php
                                        else :
                                        ?>
                                            <option value="<?= $key['nip']; ?>"><?= $key['nama_guru']; ?></option>
                                        <?php
                                        endif;
                                        ?>
                                    <?php endwhile; ?>
                                <?php else : ?>
                                    <option>- tidak ada data -</option>
                                <?php endif; ?>
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

    else :
        // header('location:../index.php?page=pelajaran-index');
        echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
        echo '<center><a href="?page=pelajaran-index">click here to back</a></center></div>
    ';
    endif;
}
?>