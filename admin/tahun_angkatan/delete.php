<?php 

if(!isset($_GET['id_thn_angkatan'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=tahun_angkatan-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_tahun_angkatan.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `tahun_angkatan` WHERE `id_thn_angkatan`=$id");
    if ($result) {
        header("location:../index.php?page=tahun_angkatan-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=tahun_angkatan-index">click here to back</a></center></div>
    ';

endif;
}


?>