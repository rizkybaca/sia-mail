<?php 

if(!isset($_GET['id_rombel'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=rombel-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_rombel.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `rombel` WHERE `id_rombel`=$id");
    if ($result) {
        header("location:../index.php?page=rombel-index");
        // return confirm('are you sure?');

    } else {
        echo mysqli_error($conn);
    }

else:

    echo '<center><p class="text-danger"><b>data not found!</b></p></center>';
    echo '<center><a href="../index.php?page=rombel-index">click here to back</a></center></div>
    ';

endif;
}


?>