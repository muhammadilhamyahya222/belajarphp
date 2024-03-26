<?php

$_namaLengkap = "Muhammad Ilham Yahya";
$_ttl = "Kediri, 27 Oktober 2002";
$_alamat = "Dsn. Adan-adan, Kec. Gurah, Kab. Kediri";
$_jk = "Laki-laki";
$_agama = "Islam";
$_negara = "Indonesia";
$_nohp = 6281230103784;
$_email = "muhammadilhamyahya222@gmail.com";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1 Pemrograman PHP</title>
</head>
<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

        * {
            font-family: "Poppins";
        }

        font {
            font-size: 14px;
        }

        legend {
            letter-spacing: 4px;
            padding: 4px 12px;
            margin-left: 8px;
            background-color: teal;
            border-radius: 40px;
            color: #fff;
        }

        p {
            line-height: 20px;
        }

        fieldset {
            border: 2px solid teal;
            border-radius: 20px;
        }
    </style>

    <fieldset>
        <legend>
            <font><b>DATA DIRI</b></font>
        </legend>
        <p>
            <img
                src="https://media.licdn.com/dms/image/D4E03AQFawAlCcPV8VQ/profile-displayphoto-shrink_800_800/0/1685384241346?e=2147483647&v=beta&t=risrqauJsZ0YYwcWWsZWltgBdnbatA5Np7AsTLHFVpw"
                align="left"
                style="width: 20%;"
                hspace="40"
                alt=""
            />
            <p><?= $_namaLengkap ?></p>
            <p><?= $_ttl ?></p>
            <p><?= $_alamat ?></p>
            <p><?= $_jk ?></p>
            <p><?= $_agama ?></p>
            <p><?= $_negara ?></p>
            <p><?= $_nohp ?></p>
            <p><?= $_email ?></p>
            
        </p>
    </fieldset>
    
</body>
</html>