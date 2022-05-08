<!-- Begin Page Content -->
<div class="container-fluid">

    <?php

    include '../helper/index_sekolah.php';

    if ($cek > 0) :
        $key = mysqli_fetch_assoc($data);
    ?>
        <div class="card border-primary">
            <div class="card-header ">
                Dashboard
            </div>
            <div class="card-body text-primary"">
                <h5 class=" card-title">Tentang Sekolah</h5>
                <p class="card-text"><?= $key['nama_sekolah'] ?>. Sekolah kami memiliki visi <?= $key['visi'] ?> dengan membawa misi: <?= $key['misi'] ?>.</p>
            </div>
        </div>
    <?php
    endif;

    ?>
    <div class="card shadow mt-4 mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data kalender akademik</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="a" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Kegiatan</th>
                            <th>Waktu Mulai</th>
                            <th>Waktu Selesai</th>
                            <th>Tahun Akademik</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../helper/index_kalender_akademik.php';
                        if ($cek > 0) :

                            //ambil data seluruh kalender_akademik
                            $no = 1;
                            while ($key = mysqli_fetch_assoc($data)) :
                                // var_dump($key); 
                        ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><?= $key['nama_kegiatan'] ?></td>
                                    <td><?= $key['waktu_mulai'] ?></td>
                                    <td><?= $key['waktu_selesai'] ?></td>
                                    <td><?= $key['nama_akademik'] . ' - ' . $key['semester'] ?></td>
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