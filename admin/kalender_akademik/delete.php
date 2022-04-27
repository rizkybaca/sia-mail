<?php 

if(!isset($_GET['id_klndr_akademik'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=kalender_akademik-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_kalender_akademik.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `kalender_akademik` WHERE `id_klndr_akademik`=$id");
    if ($result) {
        header("location:../index.php?page=kalender_akademik-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=kalender_akademik-index">click here to back</a></center></div>
    ';

endif;
}


?>