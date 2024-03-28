<?php

$m1 = ["nama" => "Abdul Rahman", "nim" => 212401, "nilai" => 90];
$m2 = ["nama" => "Ahmad Abdullah", "nim" => 212402, "nilai" => 55];
$m3 = ["nama" => "Ali Husain", "nim" => 212403, "nilai" => 75];
$m4 = ["nama" => "Amelia Puspita", "nim" => 212404, "nilai" => 80];
$m5 = ["nama" => "Fatimah Salwa", "nim" => 212405, "nilai" => 60];
$m6 = ["nama" => "Khadijah Aminah", "nim" => 212406, "nilai" => 70];
$m7 = ["nama" => "Muhammad Ibrahim", "nim" => 212407, "nilai" => 75];
$m8 = ["nama" => "Mustafa bin Abdullah", "nim" => 212408, "nilai" => 65];
$m9 = ["nama" => "Siti Nurfadilah", "nim" => 212409, "nilai" => 40];
$m10 = ["nama" => "Zahra Qonita", "nim" => 212410, "nilai" => 95];

$mahasiswa = [$m1, $m2, $m3, $m4, $m5, $m6, $m7, $m8, $m9, $m10];

$kop_tabel = ["No", "Nama Mahasiswa", "NIM", "Nilai", "Keterangan", "Grade", "Predikat"];


// FUNGSI AGGREGAT
$sel_col = array_column($mahasiswa, 'nilai');
$nilai_tertinggi = max($sel_col);
$nilai_terendah = min($sel_col);
$nilai_total = array_sum($sel_col);
$total_mahasiswa = count($mahasiswa);
$nilai_rata_rata = $nilai_total / $total_mahasiswa;

$aggregat = [
    "Nilai Tertinggi" => $nilai_tertinggi,
    "Nilai Terendah" => $nilai_terendah,
    "Nilai Rata-rata" => $nilai_rata_rata,
    "Jumlah Mahasiswa" => $total_mahasiswa,
    "Jumlah Keseluruhan Nilai" => $nilai_total
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <style>
        * {
            font-family: "Arial";
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>


    <h1 align="center">Daftar Nilai Mahasiswa</h1>
    <table cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <tr bgcolor="whitesmoke">              
                <?php
                    foreach ($kop_tabel as $kop) { ?>
    
                        <th><?= $kop ?></th>
                
                    <?php } ?>
            </tr>
        </thead>
        <tbody align="center">
            <?php
                $no = 1;
                foreach ($mahasiswa as $mhs) {
                    $ket = ($mhs['nilai'] >= 65) ? "Lulus" : "Tidak Lulus";
                    
                    if ($mhs['nilai'] >= 85 && $mhs['nilai'] <= 100) {
                        $grade = "A";
                    } else if ($mhs['nilai'] >= 75 && $mhs['nilai'] < 85) {
                        $grade = "B";
                    } else if ($mhs['nilai'] >= 65 && $mhs['nilai'] < 75) {
                        $grade = "C";
                    } else if ($mhs['nilai'] >= 40 && $mhs['nilai'] < 65) {
                        $grade = "D";
                    } else if ($mhs['nilai'] >= 0 && $mhs['nilai'] < 40) {
                        $grade = "E";
                    } else {
                        $grade = "";
                    }
                    
                    switch ($grade) {
                        case "A" :
                            $predikat = "Memuaskan";
                            break;
                        case "B" :
                            $predikat = "Bagus";
                            break;
                        case "C" :
                            $predikat = "Cukup";
                            break;
                        case "D" :
                            $predikat = "Kurang";
                            break;
                        case "E" :
                            $predikat = "Buruk";
                            break;
                        default : "";
                    }


                    ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $mhs['nama'] ?></td>
                        <td><?= $mhs['nim'] ?></td>
                        <td><?= $mhs['nilai'] ?></td>
                        <td><?= $ket ?></td>
                        <td><?= $grade ?></td>
                        <td><b><?= $predikat ?></b></td>
                    </tr>
                <?php } ?>
        </tbody>
        <tfoot>
            <?php 
            foreach ($aggregat as $agg => $hasil) { ?>
                <tr bgcolor="whitesmoke">
                    <th align="end" colspan="2"><?= $agg ?></th>
                    <th colspan="6"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>

    <center><p>&copy; Muhammad Ilham Yahya</p></center>
</body>
</html>