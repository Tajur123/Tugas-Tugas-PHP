<?php
require 'tugas4php_AryaTajurSembiring_StmikTrigunaDharma_AkhmadArip.php';
//object instance data pegawai
$a1 = new Pegawai('01','Giant Ultimate','Staff','Konghucu','Menikah');
$a2 = new Pegawai('02','Japa Meta Putri Utari','Asisten Manager','Islam','Belum Menikah');
$a3 = new Pegawai('03','Arya Tajur Sembiring','Manager','Islam','Belum Menikah');
$a4 = new Pegawai('04','Jaka Prayudha','Kabag','Kristen','Belum Menikah');
$a5 = new Pegawai('05','Maju Bersama','Asisten Manager','Budha','Menikah');

//array associative
$d_pegawai = [$a1,$a2,$a3,$a4,$a5];
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DATA KARYAWAN PT RNI </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="text-center"><?= Pegawai::perusahaan?></h1>
   <table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Nip</th>
            <th>Nama Pegawai</th>
            <th>Agama</th>
            <th>Jabatan</th>
            <th>Status</th>
            <th>Nomor</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan Jabatan</th>
            <th>Zakat Profesi</th>
            <th>Gaji Kotor</th>
            <th>Gaji Bersih</th>
        </tr>  
    </thead>
    <tbody>
            <?php
            foreach ($d_pegawai as $pgw) {
                $pgw->cetak();
            }
            ?>
    </tbody>
    <tfoot>

        <tr>
            <th>Jumlah Pegawai: <?=Pegawai::$no-1?></th>
        </tr>
    </tfoot>
   </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>