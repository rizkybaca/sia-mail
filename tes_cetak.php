<?php error_reporting(1);
    include 'koneksi.php';
    // $tem=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM tkapel WHERE id = '1'"));
?>
<!DOCTYPE html>
<html>
<!-- Bagian halaman HTML yang akan konvert -->

<head>
    <meta charset='UTF-8'>
    <link rel="shortcut icon" href="img/img/twh.png">
    <title>Cetak Kartu Pelajar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Lato', sans-serif;
        }

        @media print {
            * {
                -webkit-print-color-adjust: exact !important;
                /*Chrome, Safari */
                color-adjust: exact !important;
                /*Firefox*/
                forced-color-adjust: exact !important;
                /*edge*/
            }
        }
    </style>
</head>

<body onload='window.print()' style="font-family: arial;font-size: 12px;position:absolute;">
    <?php
        // $i=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM `profil_sekolah` WHERE `id_sekolah` = '1'"));
        // $r=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM users where id_session='$_GET[id]'"));$t = date("d - m - Y", strtotime($r['tgl_lhr']));
    ?>
    <div style="width: 750px;height: 243px;margin: 50px;background-image: url('img/img/kpel.png')!important;">
        <!-- <img src="img/img/kpel.png" alt="Graph Description" /> -->

        <img style="position: absolute;padding-left: 12px;padding-top: 5px;" class="img-responsive img"
            alt="Responsive image" src="img/img/daerah.png" width="40px">
        <img style="position: absolute;padding-left: 312px;padding-top: 5px;" class="img-responsive img"
            alt="Responsive image" src="img/img/twh.png" width="50px">
        <p
            style="position: absolute; font-family: arial; font-size: 10px; color: #fff; padding-left: 85px;text-transform: uppercase; text-align: center;">
            Pemerintah Provinsi Papua<br>Kabupaten Nabire<br>Dinas Pendidikan<br><b style="font-size: 12px">SMK
                AL-MADINA NABIRE</b></p>
        <p style="padding-left: 123px;padding-top: 70px; "><b>KARTU PELAJAR</b></p>
        <img style="border: 1px solid #ffffff;position: absolute;margin-left: 20px;margin-top: -20px;"
            src="img/img/blank.png" width="80px">
        <table style="margin-top: -10px;padding-left: 120px; position: relative;font-family: arial;font-size: 11px;">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>Rizky Nur</td>
            </tr>
            <tr>
                <td>NIS/NISN</td>
                <td>:</td>
                <td>0001/1001</td>
            </tr>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td>Jayapura</td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td>5 - Januari - 2000</td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>Laki-laki</td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Jalan Buntu</td>
            </tr>
            <tr>
                <td>Berlaku</td>
                <td>:</td>
                <td>Selama Menjadi Siswa/i</td>
            </tr>
        </table>
        <p style="padding-left: 10px;font-size: 8px; font-family: arial;position: absolute;">Alamat: Jl. Ksatrian, Desa
            Girimulyo Kec. Nabire - Kode Pos 98851<br> Email: smk@mail.com | Telp. 0880 | Website: smk-almadina.com</p>
        <p style="margin-top: -200px;padding-left: 480px;padding-top: 10px;"><b>TATA TERTIB SEKOLAH</b><br>
            <ol
                style="padding-left: 400px;color: #FFFFFF; font-family: arial;font-size: 11px;text-align: justify;padding-right: 10px">
                <li>Bertakqwa kepada Tuhan Yang Maha Esa</a></li>
                <li>Menggalang kesatuan kerukunan pelajar</li>
                <li>Belajar hidup berorganisasi untuk menyiapkan diri dalam mental, moral budi pekerti yang luhur,
                    meningkatkan kecerdasan dan keterampilan</li>
                <li>Dapat menduduki fungsinya sebagai pewaris, penerus perjuangan bangsa dan pancasila yang penuh dengan
                    kratif, aktif dan disiplin Nasional demi suksesnya program pendidikan sekolah</li>
            </ol>
        </p><br>
        <p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">
            Nabire, 27 April 2022
        </p>
        <?php
            // $t=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM ttangan WHERE id = '1'"));
        ?><br>
        <p style="position: absolute;padding-left: 550px;margin-top: -10px;font-size: 10px; font-family: arial;">
            Mengetahui, <br>Kepala Sekolah</p>
        <img style="position: absolute;padding-left: 530px;padding-top: 5px;" class="img-responsive img"
            alt="Responsive image" src="img/img/ttd_kepsek.png" width="70px">
        <?php
            // $s=mysqli_fetch_array(mysqli_query($koneksi, "SELECT * FROM stempel WHERE id = '1'"));
        ?><br><img style="position: absolute;padding-left: 530px;margin-top: -20px;" class="img-responsive img"
            alt="Responsive image" src="img/img/Stempel2.png" width="50px">
        <p style="position: absolute;padding-left: 550px;margin-top: 20px;font-size: 10px; font-family: arial;">
            <b><u>Suprapto, M.Pd.</u></b><br>NIP. 100112</p>
    </div>


</body>

</html>