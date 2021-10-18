<!DOCTYPE html>
<html>
<head>
    <title>enkripsi</title>
    <link rel="stylesheet"
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<style>
    .tombol{
        float: right;
    }
    body{
        background: rgb(158,32,87);
        background: linear-gradient(264deg, rgba(158,32,87,1) 0%, rgba(26,80,143,1) 100%);
    }
    h1{
        color: white;
    }
    label{
        color:white;
    }
    .container{
        margin-top: 12%;
        border: solid 1px;
        border-color: white;
    }
</style>

<body>
    <?php
    include "lib/lib.php"   ;
    $kunci = str_replace(" ", "", $_POST['kunci']);
    $plain = str_replace(" ", "", $_POST['plain']);
    $panjang_plain = strlen($plain);
    $panjang_kunci = strlen($kunci);
    $index_x = 0;
    $index_y = 0;
    $hasil_ciper = array();
    $hasil_akhir = "";
    while ($index_x < $panjang_plain) {
        $x = substr($plain, $index_x, 1);
        $y = substr($kunci, $index_y, 1);
        $hasil_ciper[$index_x] =
        $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];
        $index_x++;
        $index_y++;
        if ($index_y == $panjang_kunci) {
        $index_y = 0;
        }
    }
    $i = 0;
    while ($i < $index_x) {
    $hasil_akhir .= $hasil_ciper[$i];
    $i++;
    }
    ?>
    <div class="container">
        <h1 align="center">Hasil - Enkripsi</h1>
        <hr>
        <form action="dekripsi_act.php" method="post" data-ajax="false" class="ui-body ui-body-a ui-corner-all">
        <label for="basic">Cipherteks :</label>
        <textarea class="form-control" name="ciper" id="textarea-a"><?php echo $hasil_akhir; ?></textarea>
        <label for="basic">Masukkan Kunci :</label>
        <textarea class="form-control" name="kunci" id="textarea-a"><?php echo $kunci; ?></textarea><br>
        <input type="submit" class="btn btn-success" value=" Decrypt" data-theme="a">
        <div class="tombol">
        <input class="btn btn-dark" onclick="document.location='logout.php'" value="Log Out">   
        </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>