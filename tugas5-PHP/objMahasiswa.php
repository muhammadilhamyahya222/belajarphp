<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 align="center">Form Nilai Ujian</h1>
        <hr>
        <form action="#" method="GET">
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    <input type="text" name="nim" class="form-control" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Universitas</label>
                <div class="col-sm-10">
                    <select id="" name="kampus" class="form-control">
                        <option value="" hidden>-- Pilih Universitas --</option>
                        <option value="Universitas Indonesia">Universitas Indonesia</option>
                        <option value="Telkom University">Telkom University</option>
                        <option value="Universitas Jember">Universitas Jember</option>
                        <option value="Universitas Brawijaya">Universitas Brawijaya</option>
                    </select>
                    <!-- <input type="text" name="kampus" class="form-control" id=""> -->
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Mata Kuliah</label>
                <div class="col-sm-10">
                    <select id="" name="matkul" class="form-control">
                        <option value="" hidden>-- Pilih Mata Kuliah --</option>
                        <option value="Pemrograman Web">Pemrograman Web</option>
                        <option value="UI/UX">UI/UX</option>
                        <option value="Jaringan Komputer">Jaringan Komputer</option>
                        <option value="Pemrograman Aplikasi">Pemrograman Aplikasi</option>
                    </select>
                    <!-- <input type="text" name="matkul" class="form-control" id=""> -->
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label">Nilai</label>
                <div class="col-sm-10">
                    <input type="text" name="nilai" class="form-control" id="">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                    <button type="submit" name="proses" value="proses" class="btn btn-primary">Simpan</button>
                </div>
            </div>
            
        </form>
    </div>
</body>
</html>

<?php
require_once ('Mahasiswa.php');

$nim = $_GET['nim'];
$nama = $_GET['nama'];
$kampus = $_GET['kampus'];
$matkul = $_GET['matkul'];
$nilai = $_GET['nilai'];
$proses = $_GET['proses'];

$m1 = new Mahasiswa($nim, $nama, $kampus, $matkul, $nilai);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1 align="center">Daftar Nilai Ujian Mahasiswa</h1>
    <table align="center" border="1" width="82%" cellpadding="10" cellspacing="0">
        <thead>
            <tr bgcolor="beige">
                <td>NIM</td>
                <td>Nama</td>
                <td>Kampus</td>
                <td>Mata Kuliah</td>
                <td>Nilai</td>
                <td>Grade</td>
                <td>Predikat</td>
                <td>Status</td>
            </tr>
        </thead>
        <tbody>
            <?php
            if(isset($proses)){ 
                echo '<tr>';
                   echo '<td>'. $m1->nim.'</td>';
                   echo '<td>'. $m1->nama.'</td>';
                   echo '<td>'. $m1->kampus.'</td>';
                   echo '<td>'. $m1->matkul.'</td>';
                   echo '<td>'. $m1->nilai.'</td>';
                   echo '<td>'. $m1->getGrade().'</td>';
                   echo '<td>'. $m1->getPredikat().'</td>';
                   echo '<td>'. $m1->getKet().'</td>';
                echo '</tr>';
            }
            ?>
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
