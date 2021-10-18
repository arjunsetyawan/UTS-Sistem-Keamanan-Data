<?php
$key = $_GET["key"];
$nmfile = "enkripsi.txt";
$fp = fopen($nmfile,"r"); // buka file hasil enkripsi
$isi = fread($fp,filesize($nmfile));
for($i=0;$i<strlen($isi);$i++)
{
$kode[$i]=ord($isi[$i]); // rubah ASII ke desimal
$b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}
echo "<br> <br> <br> <hr>";
echo "KALIMAT CIPHERTEXT : ";
for($i=0;$i<strlen($isi);$i++)
{
echo $isi[$i];
}
echo "<br> <br>";
echo "HASIL DESKRIPSI =";
for ($i=0;$i<strlen($isi);$i++)
{
echo $c[$i];
}
echo "<br> <br> <hr>";      
echo "<br>";            
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    body{
        background: rgb(128,124,193);
        background: linear-gradient(257deg, rgba(128,124,193,1) 18%, rgba(199,192,173,1) 46%, rgba(186,162,88,1) 70%);
    }
</style>

<body>
    
</body>
</html>