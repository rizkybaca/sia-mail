<?php 
include 'template-guru/header.php';
include 'template-guru/sidebar.php';
include 'template-guru/topbar.php';

?>              

<?php 

if (isset($_GET['page'])) {
    $hal=$_GET['page'];

switch ($hal) {
    case 'home':
        include 'home.php';
        break;
    
    // manajemen kehadiran
    case 'kehadiran-index':
        include 'kehadiran/index.php';
        break;
    case 'kehadiran-pre-index':
        include 'kehadiran/pre_index.php';
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
                        <span>Copyright &copy; sia-sia? <?= date('Y')?></span>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
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
include 'template-guru/footer.php';
?>