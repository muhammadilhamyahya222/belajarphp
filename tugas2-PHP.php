<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapeku Store</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<style>
    body{
    margin-top:20px;
    background: #f6f9fc;
    }

    .account-block {
        padding: 0;
        background-image: url(https://bootdey.com/img/Content/bg1.jpg);
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
        position: relative;
    }

    .account-block .overlay {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .account-block .account-testimonial {
        text-align: center;
        color: #fff;
        position: absolute;
        margin: 0 auto;
        padding: 0 1.75rem;
        bottom: 6rem;
        left: 0;
        right: 0;
    }

    .text-theme {
        color: #5369f8 !important;
    }

    .btn-beli {
        background-color: #5369f8;
        border-color: #5369f8;
        color: #fff;
        width: 175px;
    }

    .btn-batal {
        background-color: none;
        border-color: #5369f8;
        color: #5369f8;
        width: 175px;
        margin-left: 8px;
    }
</style>

<div id="main-wrapper" class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10">
            <div class="card border-0">
                <div class="card-body p-0">
                    <div class="row no-gutters">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="mb-5">
                                    <h3 class="h4 font-weight-bold text-theme">HAPEKU STORE</h3>
                                </div>

                                <h6 class="h5 mb-0">Form Pembelian</h6>
                                <p class="text-muted mt-2 mb-5">Masukkan data di bawah ini untuk melakukan pembelian!</p>

                                <form action="tugas2-PHP.php" method="POST">
                                    <div class="form-group">
                                        <label for="">Nama Pelanggan</label>
                                        <input type="text" name="nama" class="form-control" id="" placeholder="Masukkan Nama Pelanggan">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Pilihan Handphone</label>
                                        <select id="" name="hp" class="form-control">
                                            <option value="" hidden>-- Pilihan Handphone --</option>
                                            <option value="Samsung S24 Ultra">Samsung S24 Ultra</option>
                                            <option value="iPhone 15 Pro Max">iPhone 15 Pro Max</option>
                                            <option value="Xiaomi 13 Ultra">Xiaomi 13 Ultra</option>
                                            <option value="Google Pixel 8 Pro">Google Pixel 8 Pro</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-5">
                                        <label for="">Jumlah</label>
                                        <input type="text" name="jumlah" class="form-control" id="" placeholder="Masukkan Jumlah Handphone">
                                    </div>
                                    <button type="submit" name="beli" class="btn btn-beli">Beli</button>
                                    <button type="reset" name="beli" class="btn btn-batal">Batal</button>
                                </form>
                            </div>
                        </div>

                        <?php

                            $nama = $_POST['nama'];
                            $hp = $_POST['hp'];
                            $jumlah = $_POST['jumlah'];
                            $beli = $_POST['beli'];
                            $batal = $_POST['batal'];

                            switch ($hp) {
                              case "Samsung S24 Ultra" :
                                        $hargaSatuan = 21900000;
                                        break;
                              case "iPhone 15 Pro Max" :
                                        $hargaSatuan = 18500000;
                                        break;
                              case "Xiaomi 13 Ultra" :
                                        $hargaSatuan = 13000000;
                                        break;
                              case "Google Pixel 8 Pro" :
                                        $hargaSatuan = 19900000;
                                        break;
                              default:
                                        $hargaSatuan = 0;
                            }

                            $total = $jumlah * $hargaSatuan;
                            $diskon = 20/100 * $total;
                            $ppn = 10/100 * ($total - $diskon);
                            $hargaBersih = ($total - $diskon) + $ppn;


                            if(isset($beli)) {
                            
                            ?>
                            <div class="col-lg-6 d-none d-lg-inline-block">
                                <div class="account-block rounded-right">
                                    <div class="overlay rounded-right"></div>
                                    <div class="account-testimonial">
                                        <h4 class="text-white mb-4">Nama Pelanggan: <?= $nama ?></h4>
                                        <p>Handphone Pilihan: <?= $hp ?></p>
                                        <p>Jumlah Beli: <?= $jumlah ?></p>
                                        <p>Harga Satuan: <?= "Rp " . number_format($hargaSatuan, 2, ",", ".") ?></p>
                                        <p>Total Belanja: <?= "Rp " . number_format($total, 2, ",", ".") ?></p>
                                        <p>Potongan Diskon: <?= "Rp " . number_format($diskon, 2, ",", ".") ?></p>
                                        <p>PPN: <?= "Rp " . number_format($ppn, 2, ",", ".") ?></p>
                                        <p>Harga Bersih: <?= "Rp " . number_format($hargaBersih, 2, ",", ".") ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>

                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
            <!-- end row -->

        </div>
        <!-- end col -->
    </div>
    <!-- Row -->
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>