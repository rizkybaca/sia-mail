<?php 

if(!isset($_GET['id_detail_rombel'])){
    echo '<center><p class="text-danger"><b>press delete button first!</b></p></center>';
    echo '<center><a href="../index.php?page=rombel-index">click here to back</a></center></div>
    ';
} else {
    include '../../helper/delete_detail_rombel.php';

if($cek > 0) :

    $result=mysqli_query($conn, "DELETE FROM `detail_rombel` WHERE `id_dtl_rombel`=$id");
    if ($result) {
        header("location:../index.php?page=detail_rombel-index&id_rombel=$_GET[id_rombel]");
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