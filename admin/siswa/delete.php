<?php 

if(!isset($_GET['id_siswa'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=siswa-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_siswa.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `siswa` WHERE `id_siswa`=$id");
    if ($result) {
        header("location:../index.php?page=siswa-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=siswa-index">click here to back</a></center></div>
    ';

endif;
}


?>