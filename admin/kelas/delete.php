<?php 

if(!isset($_GET['id_kelas'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=kelas-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_kelas.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `kelas` WHERE `id_kelas`=$id");
    if ($result) {
        header("location:../index.php?page=kelas-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=kelas-index">click here to back</a></center></div>
    ';

endif;
}


?>