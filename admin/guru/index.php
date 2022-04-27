<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h1 mb-0 text-gray-800"></h1>
                        <a href="?page=guru-create" class="btn btn-success">Tambah Guru Cepat</a>
                    </div>

                    <!-- Content Row -->

                    <!-- datatables -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Data Guru</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nomor</th>
                                            <th>NIP</th>
                                            <th>Nama guru</th>
                                            <th>Kode Guru</th>
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
                                            <th>Nama guru</th>
                                            <th>Kode Guru</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </tfoot> -->
                                    <tbody>
                                        <?php 
                                            include '../helper/index_guru.php';
                                            if($cek > 0) :

                                                //ambil data seluruh guru
                                                $no=1;
                                                while ($key = mysqli_fetch_assoc($data)) :
                                                    // var_dump($key); 
                                        ?>
                                        <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $key['nip'] ?></td>
                                            <?php 
                                            if ($key['role']=="Admin") {?>
                                                <td><?= '('.$key['role'].') '.$key['nama_guru'] ?></td>
                                            <?php } else {?>
                                                <td><?= $key['nama_guru'] ?></td>
                                            <?php }
                                            ?>
                                            
                                            <td><?= $key['kode_guru'] ?></td>
                                            <td><?= $key['alamat'] ?></td>
                                            <td><?= $key['telepon'] ?></td>
                                            <td><?= $key['email'] ?></td>
                                            <td>
                                                <a href="?page=guru-edit&id_guru=<?= $key['id_guru'] ?>" class="badge badge-warning">edit</a>
                                                <a href="guru/delete.php?id_guru=<?= $key['id_guru'] ?>" class="badge badge-danger" onclick="return confirm('are you sure?');" >hapus</a>
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