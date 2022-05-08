<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <button type="button" class="btn btn-success">Tambah kalender_kademik Cepat</button>
    </div> -->

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Formulir tambah pelajaran</h6>
        </div>
        <div class="card-body">
            <form method="POST" action="pelajaran/store.php">
                <div class="form-group">
                    <label for="nama">Nama Pelajaran</label>
                    <input autofocus required name="nama_pelajaran" type="text" class="form-control" id="nama" placeholder="masukkan nama pelajaran">
                </div>
                <div class="form-group">
                    <label for="kurikulum_id">Kurikulum</label>
                    <select name="kurikulum_id" class="form-control" id="kurikulum_id">
                        <option>- pilih kurikulum -</option>
                        <?php
                        include '../helper/index_kurikulum.php';
                        if ($cek > 0) :
                            //ambil data seluruh kurikulum
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>
                                <option value="<?= $key['id_kurikulum']; ?>"><?= $key['nama_kurikulum']; ?></option>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="jenjang_id">jenjang</label>
                    <select name="jenjang_id" class="form-control" id="jenjang_id">
                        <option>- pilih jenjang -</option>
                        <?php
                        include '../helper/index_jenjang.php';
                        if ($cek > 0) :
                            //ambil data seluruh jenjang
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>
                                <option value="<?= $key['id_jenjang']; ?>"><?= $key['nama_jenjang']; ?></option>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="guru_nip">Guru</label>
                    <select name="guru_nip" class="form-control" id="guru_nip">
                        <option>- pilih guru -</option>
                        <?php
                        include '../helper/index_guru.php';
                        if ($cek > 0) :
                            //ambil data seluruh guru
                            while ($key = mysqli_fetch_assoc($data)) :
                        ?>
                                <option value="<?= $key['nip']; ?>"><?= $key['nama_guru']; ?></option>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <option>-tidak ada data-</option>
                        <?php endif; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="singkatan_mapel">Singkatan Nama Pelajaran</label>
                    <input autofocus required name="singkatan_mapel" type="text" class="form-control" id="singkatan_mapel" placeholder="masukkan singkatan nama pelajaran">
                    <small id="singkatan_mapel" class="form-text text-muted">contoh: MTK, BHSIND, BHSING, BHSJW, PKN, dsb.</small>
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