<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Mahasiswa Baru</title>
    <link rel="stylesheet" href="skin2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    

</head>
<body>
    
   <div class="medsos">
       <div class="container">
           <ul>
               <li><a href="#"><i class="fab fa-facebook"></i></a></li>
               <li><a href="#"><i class="fab fa-youtube"></i></a></li>
               <li><a href="#"><i class="fab fa-twitter"></i></a></li>
           </ul>
       </div>
   </div>   
   <header>
       <div class="container">
        <h1><a href="index.html">UTS SKD</a></h1>
        <ul>
            <li><a href="welcome.php" class="login">Vignere Cipher</a></li>
        </ul>
        <ul>
            <li><a href="caesar/index.php" class="login">Caesar Cipher</a></li>
        </ul>
    </div>
   </header>

   <section class="banner">
    </section>

   <section class="about" id="about">
           <h3>ABOUT</h3>
       <p>Website ini diharapkan dapat membantu Pak Adi dalam proses pendataan calon siswa baru, karena panitia penerimaan calon mahasiswa baru merasa keberatan jika pendataan calon siswa baru dilakukan menggunakan aplikasi excel. Website ini juga dilengkapi dengan 3 sistem keamanan meliputi MD5, vignerecipher dalam enkripsi dan juga deskripsi data.</p>
   </section>

   <section class="service">
       <div class="container">
           <h3>SERVICE</h3>
           <div class="box">
               <div class="col-4">
                   <div class="icon"><i class="fas fa-mobile"></i></div>
                       <h4>KONTAK</h4>
               </div>
               <div class="col-4">
                <div class="icon"><i class="fas fa-globe"></i></div>
                    <h4>PANDUAN</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fas fa-edit"></i></div>
                    <h4>INFORMASI</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fas fa-chart-bar"></i></div>
                    <h4>JURUSAN</h4>
            </div>
           </div>
       </div>
   </section>
   <footer>
       <div class="container">
           <small>Copyright &copy; 2020 UTS SKD- Sistem Kemanan Data</small>
       </div>
   </footer>
  
 
</body>
</html>