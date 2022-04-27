<?php 

//db
include '../../koneksi.php';

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

$folder = 'berkas';
$tmp_name = $_FILES["filecsv"]["tmp_name"];
$name = "file_upload.csv";
move_uploaded_file($tmp_name, "$folder/$name");

//cek apakah delimiter menggunakan , atau ;
$file = fopen("berkas/file_upload.csv","r"); //buka file csv
$cek = fgetcsv($file,0,','); //baca isi csv perbaris dengan koma
if(!empty($cek[1])) { 
    $delimiter=",";
} else { 
    $delimiter=";";
}
fclose($file);
//batas

//insert ke database
$file = fopen("berkas/file_upload.csv","r"); //buka file csv
$baris = 0;
while(!feof($file)) //cari akhir baris csv
{
    $data = fgetcsv($file,0,$delimiter);
    if(!empty($data[0])) //tidak mengikutkan spasi kosong
    { 
        if($baris >= 1) //karena baris 0 adalah judul kolom/field
        {

            //cara memanggilnya
            $password = generatePass();
            $pass=password_hash($password, PASSWORD_DEFAULT);

            $nama_siswa = htmlspecialchars($data[1]);
            $nisn = htmlspecialchars($data[2]);
            $nis = htmlspecialchars($data[3]);
            $email = htmlspecialchars($data[4]);
            $telepon = htmlspecialchars($data[5]);
            $alamat = htmlspecialchars($data[6]);

            $result=mysqli_query($conn, "INSERT INTO `siswa` (`nama_siswa`,`nisn`,`nis`,`email`,`password`,`telepon`,`alamat`) VALUES ('$nama_siswa','$nisn','$nis','$email','$pass','$telepon','$alamat')");

            if ($result) {
                //kirim email
                include ('../../helper/send_email.php');
                
                // header("location:../index.php?page=siswa-index");

            } else {
                echo mysqli_error($conn);
            }

        } 
    }
    $baris++;
}
fclose($file); //tutup akses file csv

unlink("$folder/$name");

$pesan = "Data berhasil diimpor";
$url = "../index.php?page=siswa-index";

echo "<script>alert('$pesan');location='$url';</script>";

?>