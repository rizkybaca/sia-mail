<?php
include 'template-admin/header.php';
include 'template-admin/sidebar.php';
include 'template-admin/topbar.php';

?>
<?php
if (isset($_GET['page'])) {
    $hal = $_GET['page'];

    switch ($hal) {

            //dashboard
        case 'home':
            include 'home.php';
            break;

            // manajemen guru
        case 'guru-index':
            include 'guru/index.php';
            break;
        case 'guru-create':
            include 'guru/create.php';
            break;
        case 'guru-show':
            include 'guru/show.php';
            break;
        case 'guru-edit':
            include 'guru/edit.php';
            break;
        case 'guru-delete':
            include 'guru/delete.php';
            break;
        case 'guru-import':
            include 'guru/import.php';
            break;

            // manajemen siswa
        case 'siswa-index':
            include 'siswa/index.php';
            break;
        case 'siswa-create':
            include 'siswa/create.php';
            break;
        case 'siswa-show':
            include 'siswa/show.php';
            break;
        case 'siswa-edit':
            include 'siswa/edit.php';
            break;
        case 'siswa-delete':
            include 'siswa/delete.php';
            break;
        case 'siswa-import':
            include 'siswa/import.php';
            break;

            // manajemen kurikulum
        case 'kurikulum-index':
            include 'kurikulum/index.php';
            break;
        case 'kurikulum-create':
            include 'kurikulum/create.php';
            break;
        case 'kurikulum-show':
            include 'kurikulum/show.php';
            break;
        case 'kurikulum-edit':
            include 'kurikulum/edit.php';
            break;
        case 'kurikulum-delete':
            include 'kurikulum/delete.php';
            break;

            // manajemen tahun_akademik
        case 'tahun_akademik-index':
            include 'tahun_akademik/index.php';
            break;
        case 'tahun_akademik-create':
            include 'tahun_akademik/create.php';
            break;
        case 'tahun_akademik-show':
            include 'tahun_akademik/show.php';
            break;
        case 'tahun_akademik-edit':
            include 'tahun_akademik/edit.php';
            break;
        case 'tahun_akademik-delete':
            include 'tahun_akademik/delete.php';
            break;

            // manajemen tahun_angkatan
        case 'tahun_angkatan-index':
            include 'tahun_angkatan/index.php';
            break;
        case 'tahun_angkatan-create':
            include 'tahun_angkatan/create.php';
            break;
        case 'tahun_angkatan-show':
            include 'tahun_angkatan/show.php';
            break;
        case 'tahun_angkatan-edit':
            include 'tahun_angkatan/edit.php';
            break;
        case 'tahun_angkatan-delete':
            include 'tahun_angkatan/delete.php';
            break;

            // manajemen jenjang
        case 'jenjang-index':
            include 'jenjang/index.php';
            break;
        case 'jenjang-create':
            include 'jenjang/create.php';
            break;
        case 'jenjang-show':
            include 'jenjang/show.php';
            break;
        case 'jenjang-edit':
            include 'jenjang/edit.php';
            break;
        case 'jenjang-delete':
            include 'jenjang/delete.php';
            break;

            // manajemen kelas
        case 'kelas-index':
            include 'kelas/index.php';
            break;
        case 'kelas-create':
            include 'kelas/create.php';
            break;
        case 'kelas-show':
            include 'kelas/show.php';
            break;
        case 'kelas-edit':
            include 'kelas/edit.php';
            break;
        case 'kelas-delete':
            include 'kelas/delete.php';
            break;

            // manajemen pelajaran
        case 'pelajaran-index':
            include 'pelajaran/index.php';
            break;
        case 'pelajaran-create':
            include 'pelajaran/create.php';
            break;
        case 'pelajaran-show':
            include 'pelajaran/show.php';
            break;
        case 'pelajaran-edit':
            include 'pelajaran/edit.php';
            break;
        case 'pelajaran-delete':
            include 'pelajaran/delete.php';
            break;

            // manajemen jadwal_pelajaran
        case 'jadwal_pelajaran-index':
            include 'jadwal_pelajaran/index.php';
            break;
        case 'jadwal_pelajaran-create':
            include 'jadwal_pelajaran/create.php';
            break;
        case 'jadwal_pelajaran-show':
            include 'jadwal_pelajaran/show.php';
            break;
        case 'jadwal_pelajaran-edit':
            include 'jadwal_pelajaran/edit.php';
            break;
        case 'jadwal_pelajaran-delete':
            include 'jadwal_pelajaran/delete.php';
            break;

            // manajemen kalender_akademik
        case 'kalender_akademik-index':
            include 'kalender_akademik/index.php';
            break;
        case 'kalender_akademik-create':
            include 'kalender_akademik/create.php';
            break;
        case 'kalender_akademik-show':
            include 'kalender_akademik/show.php';
            break;
        case 'kalender_akademik-edit':
            include 'kalender_akademik/edit.php';
            break;
        case 'kalender_akademik-delete':
            include 'kalender_akademik/delete.php';
            break;

            // manajemen kalender_pembayaran
        case 'kalender_pembayaran-index':
            include 'kalender_pembayaran/index.php';
            break;
        case 'kalender_pembayaran-create':
            include 'kalender_pembayaran/create.php';
            break;
        case 'kalender_pembayaran-show':
            include 'kalender_pembayaran/show.php';
            break;
        case 'kalender_pembayaran-edit':
            include 'kalender_pembayaran/edit.php';
            break;
        case 'kalender_pembayaran-delete':
            include 'kalender_pembayaran/delete.php';
            break;

            // manajemen rombel
        case 'rombel-index':
            include 'rombel/index.php';
            break;
        case 'rombel-create':
            include 'rombel/create.php';
            break;
        case 'rombel-show':
            include 'rombel/show.php';
            break;
        case 'rombel-edit':
            include 'rombel/edit.php';
            break;
        case 'rombel-delete':
            include 'rombel/delete.php';
            break;

            // manajemen detail_rombel
        case 'detail_rombel-index':
            include 'detail_rombel/index.php';
            break;
        case 'detail_rombel-create':
            include 'detail_rombel/create.php';
            break;
        case 'detail_rombel-show':
            include 'detail_rombel/show.php';
            break;
        case 'detail_rombel-edit':
            include 'detail_rombel/edit.php';
            break;
        case 'detail_rombel-delete':
            include 'detail_rombel/delete.php';
            break;
        case 'detail_rombel-import':
            include 'detail_rombel/import.php';
            break;

            // manajemen kehadiran
        case 'kehadiran-pre-index':
            include 'kehadiran/pre_index.php';
            break;
        case 'kehadiran-index':
            include 'kehadiran/index.php';
            break;
        case 'kehadiran-rekap':
            include 'kehadiran/rekap.php';
            break;
        case 'kehadiran-create':
            include 'kehadiran/create.php';
            break;
        case 'kehadiran-show':
            include 'kehadiran/show.php';
            break;
        case 'kehadiran-edit':
            include 'kehadiran/edit.php';
            break;
        case 'kehadiran-delete':
            include 'kehadiran/delete.php';
            break;

            // manajemen detail_kehadiran
        case 'detail_kehadiran-index':
            include 'detail_kehadiran/index.php';
            break;
        case 'detail_kehadiran-create':
            include 'detail_kehadiran/create.php';
            break;
        case 'detail_kehadiran-show':
            include 'detail_kehadiran/show.php';
            break;
        case 'detail_kehadiran-edit':
            include 'detail_kehadiran/edit.php';
            break;
        case 'detail_kehadiran-delete':
            include 'detail_kehadiran/delete.php';
            break;

            // manajemen nilai
        case 'nilai-pre-index':
            include 'nilai/pre_index.php';
            break;
        case 'nilai-index':
            include 'nilai/index.php';
            break;
        case 'nilai-rekap':
            include 'nilai/rekap.php';
            break;
        case 'nilai-create':
            include 'nilai/create.php';
            break;
        case 'nilai-show':
            include 'nilai/show.php';
            break;
        case 'nilai-edit':
            include 'nilai/edit.php';
            break;
        case 'nilai-delete':
            include 'nilai/delete.php';
            break;

            // manajemen detail_nilai
        case 'detail_nilai-index':
            include 'detail_nilai/index.php';
            break;
        case 'detail_nilai-create':
            include 'detail_nilai/create.php';
            break;
        case 'detail_nilai-show':
            include 'detail_nilai/show.php';
            break;
        case 'detail_nilai-edit':
            include 'detail_nilai/edit.php';
            break;
        case 'detail_nilai-delete':
            include 'detail_nilai/delete.php';
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

            // manajemen sekolah
        case 'sekolah-index':
            include 'sekolah/index.php';
            break;
        case 'sekolah-edit':
            include 'sekolah/edit.php';
            break;

            // manajemen sistem
        case 'sistem-index':
            include 'sistem/index.php';
            break;
        case 'sistem-edit':
            include 'sistem/edit.php';
            break;

            // manajemen bantuan
        case 'bantuan-index':
            include 'bantuan/index.php';
            break;
            // case 'bantuan-edit':
            //     include 'bantuan/edit.php';
            //     break;

        default:
            echo "<center><h1> ERROR !</h1></center>";
            break;
    }
} else {
    // auto homepage
    include "home.php";
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
include 'template-admin/footer.php';
?>