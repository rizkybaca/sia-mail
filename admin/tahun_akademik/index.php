<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800"></h1>
    <a href="?page=tahun_akademik-create" class="btn btn-success">Tambah Tahun Akademik Cepat</a>
</div>

<!-- Content Row -->

<!-- datatables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Tahun Akademik</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama Tahun Akademik</th>
                        <th>Semester</th>
                        <th>Status Aktif</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <!-- <tfoot>
                    <tr>
                        <th>Nomor</th>
                        <th>NIP</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot> -->
                <tbody>
                    <?php 
                        include '../helper/index_tahun_akademik.php';
                        if($cek > 0) :

                            //ambil data seluruh tahun_akademik
                            $no=1;
                            while ($key = mysqli_fetch_assoc($data)) :
                                // var_dump($key); 
                    ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $key['nama_akademik'] ?></td>
                        <td><?= $key['semester'] ?></td>
                        <?php 
                        if ($key['is_active']=="Y") {?>
                            <td>Aktif</td>
                        <?php 
                        }elseif ($key['is_active']=="N"){
                        ?>
                            <td>Tidak Aktif</td>
                        <?php } 
                        ?>
                        <td>
                            <a href="?page=tahun_akademik-edit&id_thn_akademik=<?= $key['id_thn_akademik'] ?>" class="badge badge-warning">edit</a>
                            <a href="tahun_akademik/delete.php?id_thn_akademik=<?= $key['id_thn_akademik'] ?>" class="badge badge-danger" onclick="return confirm('are you sure?');" >hapus</a>
                        </td>
                    </tr>
                    <?php 
                        endwhile;
                        endif;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->