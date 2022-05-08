<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800"></h1>
    <a href="?page=pelajaran-create" class="btn btn-success">Tambah Pelajaran Cepat</a>
</div>

<!-- Content Row -->

<!-- datatables -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data pelajaran</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nomor</th>
                        <th>Nama pelajaran</th>
                        <th>Jenjang</th>
                        <th>Kurikulum</th>
                        <th>Guru Pengampu</th>
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
                        include '../helper/index_pelajaran.php';
                        
                        if($cek > 0) :


                            //ambil data seluruh pelajaran
                            $no=1;
                            while ($key = mysqli_fetch_assoc($data)) :
                                // var_dump($key); 
                    ?>
                    <tr>
                        <td><?= $no++;?></td>
                        <td><?= $key['nama_pelajaran'] ?></td>
                        <td><?= $key['nama_jenjang']; ?></td>
                        <td><?= $key['nama_kurikulum'] ?></td>
                        <td><?= $key['nama_guru'] ?></td>
                        <td>
                            <a href="?page=pelajaran-edit&id_pelajaran=<?= $key['id_pelajaran'] ?>" class="badge badge-warning">edit</a>
                            <a href="pelajaran/delete.php?id_pelajaran=<?= $key['id_pelajaran'] ?>" class="badge badge-danger" onclick="return confirm('are you sure?');" >hapus</a>
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