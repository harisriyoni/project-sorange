<?php session_start();
include ("control/config.php");
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");}
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

    <title>ADMIN</title>
  </head>
  <body>
  <nav>
        <div class="logo">
            <h4>ADMINISTRATOR</h4>
        </div>
        <ul><li><a href="index.php">Home</a></li>
        <li><a href="login.php">Portal Berita</a></li></ul>
          <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Data Berita/Logout
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a class="dropdown-item" href="form-create.php">Upload Berita</a></li>
    <li><a class="dropdown-item" href="list-kategori.php">Daftar Berita</a></li>
    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
  </ul>
</div>
      </nav>
      <script src="js/ss.js"></script>
 <div class="jumbotron">
   <div class="container"><br>
      <h1 class="display-4 text-white"><b> SORANGE.ID ADMINISTRATOR </b><br> <span class="font-weight-bold text-white"><b> </b></span></h1> 
    <p class="lead text-white"><b>SELAMAT DATANG ADMIN :)</b> </p>
    <p class="lead text-white"><b>Upload Berita!</b> </p>
    <a class="btn btn-primary btn-lg font-weight-bold" href="form-create.php" role="button"><img src="upload2.gif" height="60" alt=""></a>
   </div>
 </div> <br><br><br><br><br>
       <br><br><br>   
    <!--FOOTER-->
    <div class="footer-bottom">
        <div class="container-fluid text-center">
            <p class="text-white"> Developed by.<a class="text-white" href="index.php">Sorange.ID</a></p>
        </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>