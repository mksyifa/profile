<?php //tag pembuka
    $nim    = 202520034;
    $nama   = "Muhammad Khoirus Syifa";
    $alamat = "Sikumbang, RT 001 RT 001, Winong, Kemiri, Purworejo";
    $alamatEmail    = "muhammadkhoiruss23@gmail.com";
    $bidangMinat    = "pemrograman";
    
//tag penutup ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDENTITAS DIRI</title>
    <style type="text/css">
        body{
            background-color: lightblue;

        }
        div.content{
            background-color: #c4def2;
            margin: auto;
            width: 700px;
            height: 375px;
            border-radius: 20px;
        }
        div.header{
            text-align: center;
            background-color: #379eed;
            color: white;
            border-radius: 20px 20px 0px 0px;
            font-size: 24px;
            margin-bottom: 10px;
        }
        img{
            border-radius: 10px;
        }
        table{
            align: center;
            text-align : left;
            border: 1px black;
            font-size: 16px;
        }
        

    </style>
</head>
<body>
    <div class="content">
        <div class="header">IDENTITAS DIRI</div>

        <center><img src="mksyifa.jpg" alt=""width="200" height="200";></center>
        <div class="data">
            <table>
            <tr>
                <td>NIM</td>
                <td>: <?php print $nim; //mengambil v?></td> 
            </tr>
            <tr>
                <td>NAMA</td>
                <td>: <?php print $nama; ?></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>: <?php print $alamat; ?></td>
            </tr>
            <tr>
                <td>ALAMAT E-MAIL</td>
                <td>: <?php print $alamatEmail; ?></td>
            </tr>
            <tr>
                <td>BIDANG MINAT</td>
                <td>: <?php print $bidangMinat; ?></td>
            </tr>
            </table>       
        </div>
    </div>
</body>
</html>