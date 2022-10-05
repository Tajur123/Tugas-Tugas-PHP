<?php
$m1 = ['nim'=> '2020020475','nama'=>'Arya','nilai'=>'80'];
$m2 = ['nim'=> '2020020476','nama'=>'Tajur','nilai'=>'70'];
$m3 = ['nim'=> '2020020477','nama'=>'Sembiring','nilai'=>'50'];
$m4 = ['nim'=> '2020020478','nama'=>'Japa','nilai'=>'60'];
$m5 = ['nim'=> '2020020479','nama'=>'Meta','nilai'=>'60'];
$m6 = ['nim'=> '2020020470','nama'=>'Putri','nilai'=>'77'];
$m7 = ['nim'=> '2020020471','nama'=>'Utari','nilai'=>'87'];
$m8 = ['nim'=> '2020020472','nama'=>'Giant','nilai'=>'80'];
$m9 = ['nim'=> '2020020473','nama'=>'Jason','nilai'=>'68'];
$m10 = ['nim'=> '2020020474','nama'=>'Jaka','nilai'=>'77'];

$ar_judul = ['NO','NIM','NAMA','NILAI','KETERANGAN','GRADE','PREDIKAT'];

$nama_mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

$jumlah_siswa = count($nama_mahasiswa);
$jml_nilai = array_column($nama_mahasiswa,'nilai');
$max = max($jml_nilai);
$min = min($jml_nilai);
$total = array_sum($jml_nilai);
$rata2 = $total / $jumlah_siswa;

$Keterangansiswa = ['Jumlah Siswa' => $jumlah_siswa, 'Nilai Tertinggi' => $max, 'Nilai Terendah' => $min, 'Total Nilai' => $total, 'Rata-Rata'=> $rata2 ];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Nilai Mahasiswa</title>
</head>

<body> <br>
    <h3 class="text-center">DAFTAR-DAFTAR NILAI MAHASISWA</h3>

    <table class="table table-striped">
        <thead>
            <tr>
                <?php
                foreach ($ar_judul as $jdl) {
                ?>
                    <th>
                        <?= $jdl; ?>
                    </th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($nama_mahasiswa as $nama) {

                // Rumus2

                $keterangan = ($nama['nilai']) >=  60 ? 'Lulus' : 'Tidak lulus';


                if($nama['nilai'] >= 85 && $nama['nilai']  <= 100) {
                    $grade = 'A';
                    $predikat = 'Memuaskan';
                }
                else if ($nama['nilai']  >= 75 && $nama['nilai']  < 85){
                    $grade = 'B';
                    $predikat = 'Baik';
                }
                else if ($nama['nilai']  >= 60 && $nama['nilai']  < 75){
                    $grade = 'C';
                    $predikat = 'Cukup';
                }
                else if ($nama['nilai']  >= 50 && $nama['nilai']  < 60){
                    $grade = 'D';
                    $predikat = 'Sangat Cukup';
                }

                else if ($nama['nilai']  >= 0 && $nama['nilai']  < 50) {
                    $grade = 'E';
                    $predikat = 'Buruk';
                }

                else {
                    $grade = '';
                }
                      
            ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $nama['nim']; ?></td>
                    <td><?= $nama['nama']; ?></td>
                    <td><?= $nama['nilai']; ?></td>
                    <td><?= $keterangan; ?></td>
                    <td><?= $grade; ?></td>
                    <td><?= $predikat; ?></td>
                    

                </tr>
            <?php $no++; }
             ?>
        </tbody>

        <?php
        foreach ($Keterangansiswa as $ket => $hasil) { 
        ?>
            <tfoot>
                <tr>
                    <th colspan="7"><?= $ket?>
                    </th>
                    <th><?= $hasil ?>
                    </th>
                </tr>
            <?php } ?>
            </tfoot>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
</body>
</html>