<?php 

//db
include '../../koneksi.php';

//get form data
$id_guru= $_POST['id_guru'];
$password_lama= $_POST['password_lama'];
$password_baru= $_POST['password_baru'];
$konfirmasi_password_baru= $_POST['konfirmasi_password_baru'];

// var_dump($_POST);die();

include '../../helper/show_password.php';

if($cek > 0) {
    $key=mysqli_fetch_assoc($data);
    if (password_verify($password_lama, $key['password'])) {

        if ($password_baru===$konfirmasi_password_baru) {

            $pass=password_hash($password_baru, PASSWORD_DEFAULT);

            //update
            $result=mysqli_query($conn, "UPDATE `guru` SET `password`='$pass' WHERE `id_guru`=$id_guru");

            //cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
            //jika berhasil maka tampilkan pesan sukses

            if ($result) {
                header("location:../index.php?page=profil-show");

            } else {
                echo mysqli_error($conn);
            }

        }else {
            // error salah masukkan password lama
            header("location:../index.php?page=profil-edit");
        }

    } else {
        // error salah masukkan password lama
        header("location:../index.php?page=profil-edit");
    }
    
}

?>

