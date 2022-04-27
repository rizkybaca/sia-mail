<?php 
 session_start();

    $id=$_SESSION['id_guru'];
    $data = mysqli_query($conn,"SELECT * FROM `guru` WHERE `id_guru`='$id' ");

    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($data);


?>