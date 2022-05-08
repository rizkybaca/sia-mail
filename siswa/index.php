<?php
include 'template-siswa/header.php';
include 'template-siswa/sidebar.php';
include 'template-siswa/topbar.php';

?>
<?php

if (isset($_GET['page'])) {
    $hal = $_GET['page'];

    switch ($hal) {
        case 'home':
            include 'home.php';
            break;

            // manajemen detail_kehadiran
        case 'jadwal_pelajaran-index':
            include 'jadwal_pelajaran/index.php';
            break;

            // manajemen kehadiran
        case 'kehadiran-rekap':
            include 'kehadiran/rekap.php';
            break;

            // manajemen nilai
        case 'nilai-rekap':
            include 'nilai/rekap.php';
            break;

            // manajemen bantuan
        case 'bantuan-index':
            include 'bantuan/index.php';
            break;

            // manajemen profil
        case 'password-edit':
            include 'profil/pass_edit.php';
            break;
        case 'profil-show':
            include 'profil/show.php';
            break;
        case 'profil-edit':
            include 'profil/edit.php';
            break;

        default:
            echo "<center><h1>ERROR !</h1></center>";
            break;
    }
} else {
    // auto homepage
    include 'home.php';
}

?>

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?= $_SESSION['nama_sistem'] . ' by ' . $_SESSION['pengembang'] ?> <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php
include 'template-siswa/footer.php';
?>