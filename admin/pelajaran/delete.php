<?php 

if(!isset($_GET['id_pelajaran'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=pelajaran-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_pelajaran.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `pelajaran` WHERE `id_pelajaran`=$id");
    if ($result) {
        header("location:../index.php?page=pelajaran-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=pelajaran-index">click here to back</a></center></div>
    ';

endif;
}


?>