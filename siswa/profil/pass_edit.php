<?php
if (!isset($_SESSION['id_siswa'])) {
    echo '<center><p class="text-danger"><b>login first!</b></p></center>';
    echo '<center><a href="../logout.php">click here to logout!</a></center></div>
    ';
} else {
    include '../helper/show_profil_siswa.php';

    if ($cek > 0) :
        $key = mysqli_fetch_assoc($data);
?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h1 mb-0 text-gray-800"></h1>
        <a href="?page=profil-edit" class="btn btn-outline-success">Edit Profile</a>
        <a href="?page=password-edit" class="btn btn-outline-success">Edit Password</a>
    </div> -->

            <!-- Content Row -->

            <!-- datatables -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit password</h6>
                </div>
                <div class="card-body">
                    <form method="POST" action="profil/pass_update.php">
                        <input type="hidden" name="id_siswa" value="<?= $key['id_siswa'] ?>">
                        <div class="form-group">
                            <label for="password_lama">Password lama</label>
                            <input required name="password_lama" type="password" class="form-control" id="password_lama" placeholder="masukkan password lama anda">
                        </div>
                        <div class="form-group">
                            <label for="password_baru">Password baru</label>
                            <input required name="password_baru" type="password" class="form-control" id="password_baru" placeholder="masukkan password baru anda">
                        </div>
                        <div class="form-group">
                            <label for="konfirmasi_password_baru">Konfirmasi password baru</label>
                            <input required name="konfirmasi_password_baru" type="password" class="form-control" id="konfirmasi_password_baru" placeholder="masukkan password baru anda lagi untuk konfirmasi">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>

            </div>

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-start mb-4">
                <h1 class="h1 mb-0 text-gray-800"></h1>
                <a href="?page=profil-show" class="btn btn-outline-secondary mr-3">Kembali</a>
                <!-- <a href="?page=password-edit" class="btn btn-outline-danger">Edit Password</a> -->
            </div>



        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

<?php

    else :
        // header('location:../index.php?page=siswa-index');
        echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
        echo '<center><a href="?page=siswa-index">click here to back</a></center></div>
    ';
    endif;
}
?>