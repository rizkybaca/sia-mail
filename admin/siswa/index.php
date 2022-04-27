<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=siswa-create" class="btn btn-success">Tambah Siswa Cepat</a>
    </div>

    <!-- Content Row -->

    <!-- datatables -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data siswa</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>NISN</th>
                            <th>Nama siswa</th>
                            <th>NIS</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <!-- <tfoot>
                        <tr>
                            <th>Nomor</th>
                            <th>NIP</th>
                            <th>Nama siswa</th>
                            <th>Kode siswa</th>
                            <th>Alamat</th>
                            <th>Telepon</th>
                            <th>Email</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot> -->
                    <tbody>
                        <?php 
                            include '../helper/index_siswa.php';
                            if($cek > 0) :

                                //ambil data seluruh siswa
                                $no=1;
                                while ($key = mysqli_fetch_assoc($data)) :
                                    // var_dump($key); 
                        ?>
                        <tr>
                            <td><?= $no++;?></td>
                            <td><?= $key['nisn'] ?></td>
                            <td><?= $key['nama_siswa'] ?></td>
                            <td><?= $key['nis'] ?></td>
                            <td><?= $key['alamat'] ?></td>
                            <td><?= $key['telepon'] ?></td>
                            <td><?= $key['email'] ?></td>
                            <td>
                                <a href="?page=siswa-edit&id_siswa=<?= $key['id_siswa'] ?>" class="badge badge-warning">edit</a>
                                <a href="siswa/delete.php?id_siswa=<?= $key['id_siswa'] ?>" class="badge badge-danger" onclick="return confirm('are you sure?');" >hapus</a>
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