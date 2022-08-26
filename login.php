<?php
include ("control/config.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>SORANGE.ID</title>
  </head>
  <body>
  <nav>
        <div class="logo">
            <h4>SORANGE.ID</h4>
        </div>
        <ul><li><a href="login.php">Home</a></li>
      <li><a href="home.php">Baca Berita</a></li></ul></nav>
      <script src="js/ss.js"></script>
 <div class="jumbotron">
   <div class="container"><br>
      <h1 class="display-4 text-white"><b> SORANGE </b><br> <span class="font-weight-bold text-white"><b> SELAMAT DATANG :)</b></span></h1>
    <p class="lead text-white"><b>Selamat Membaca dan Menambah Pengetahuan Anda</b> </p>   
   </div>
 </div> 
 <br><br><br><br><br>
<!-- card baru -->
	<div class="container-fluid">
    <?php
    $query = mysqli_query($db, "SELECT * FROM kategori inner join berita on kategori.idkat=berita.idkat")?>
      <div class="row">
        <?php foreach ($query as $row) :?>
            <div class="card" style="width: 27rem;" ALIGN="center">
            <img src="<?php echo $row['gambar'] ;?>" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title"><?php echo $row['judul_berita'];?></h5>
            <small><?php echo $row['deskripsi'];?></p></small><br>
            <small><?php echo $row['kategori'];?></small>
            <p class="card-text">Klik Selengkapnya untuk membaca</p>
             <a href="home.php" class="btn btn-primary">Selengkapnya</a>
            </div>
      </div><br>
        <?php endforeach ?>                
     </div>
  </div>
</div> 
       <br><br><br>   
    <!--FOOTER-->
    <div class="footer-bottom">
        <div class="container-fluid text-center">
            <p class="text-white"> Developed by.<a class="text-white" href="index.php">Sorange.ID</a></p>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>