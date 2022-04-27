<?php 

//generate password otomatis
function generatePass()
{
    $karakter= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
    $string = '';
    for ($i = 0; $i < 12; $i++) {
        $pos = rand(0, strlen($karakter)-1);
        $string .= $karakter[$pos];
    }
    return $string;
}

//db
include '../../koneksi.php';

//get form data
$nisn= $_POST['nisn'];
$nama_siswa= $_POST['nama_siswa'];
$nis= $_POST['nis'];
$alamat= $_POST['alamat'];
$telepon= $_POST['telepon'];
$email= $_POST['email'];




//cara memanggilnya
$password = generatePass();
$pass=password_hash($password, PASSWORD_DEFAULT);
// var_dump($_POST);die;


//insert
$result=mysqli_query($conn, "INSERT INTO `siswa` (`nama_siswa`,`nisn`,`nis`,`email`,`password`,`telepon`,`alamat`) VALUES ('$nama_siswa','$nisn','$nis','$email','$pass','$telepon','$alamat')");



//cek keberhasilan insert, jika num_rows($result) < 0 maka tampilkan pesan error
//jika berhasil maka tampilkan pesan sukses

if ($result) {
    //kirim email
    include_once('../../helper/send_email.php');
    
    header("location:../index.php?page=siswa-index");

} else {
    echo mysqli_error($conn);
}

?>