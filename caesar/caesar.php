<?php

$kalimat=$_GET['kata'];
$key= $_GET['key'];
for($i=0; $i<strlen($kalimat); $i++){
    $kode[$i] = ord($kalimat[$i]); //merubah ASCII ke desimal
    $b[$i]= ($kode[$i] + $key) % 256; //proses enkripsi     
    $c[$i]= chr($b[$i]); //rubah desimal ke ASCII   
}
echo "<br> <br> <hr>";
echo "KALIMAT ASLI :";
for($i=0; $i<strlen($kalimat); $i++){
    echo $kalimat[$i];
}
echo "<br> <br>";
echo "HASIL ENKRIPSI =";
$hsl='';
for($i=0; $i<strlen($kalimat); $i++){
    echo $c[$i];
    $hsl=$hsl . $c[$i];
}
echo "<br> <br> <hr>";
echo "<br>";
//simpan data di file
$fp = fopen("enkripsi.txt", "w");
fputs($fp, $hsl);   
fclose($fp);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Enkripsi</title>
</head>

<style>
    body{
        background: rgb(128,124,193);
        background: linear-gradient(257deg, rgba(128,124,193,1) 18%, rgba(199,192,173,1) 46%, rgba(186,162,88,1) 70%);
    }
</style>

<body>
    <a href="deskripsi.php">Deskripsi</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>