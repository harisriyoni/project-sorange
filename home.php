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
      <li><a href="home.php">Baca Berita</a></li></ul>   
      </nav>
      <script src="js/ss.js"></script>
    </div>
  </div>  
    <div class="container" style="margin-top:40px" ALIGN="Justify">
    <?php $query = mysqli_query($db, "SELECT * FROM kategori inner join berita on kategori.idkat=berita.idkat")?>
      <?php foreach ($query as $row) :?>
        <div class="container">
            <div class="col-md-9">
                  <div class="panel panel-default">
                   <div class="panel-body">
                    <div class="post-detail">
                      <h4 class="float-left"><?php echo $row['judul_berita'];?></h4>
                        <div class="info-meta">
                            <ul class="list-inline">
                                <li><i class="fa fa-user"></i> SORANGE.ID</li>
                                <li class="pull-right">Kategori : <?php echo $row['kategori'];?></li>
                            </ul>
                        </div> <hr>
                      <p>
                      <img src="<?php echo $row['gambar'];?>" height="300" width="500" alt="..." style="float:left;padding:5px 10px 5px 10px;"><p><?php echo $row['isi_berita'];?></p>
                    <br><br>
                      </div>
                    <div class="frame-tombol" >
                        <a href="" class="btn tombol-twitter"><i class="fa fa-twitter"></i> Twitter</a>
                        <a href="" title="Share on Facebook" target="_blank" class="btn tombol-facebook"><i class="fa fa-facebook"></i> Facebook</a>
                        <a href="" title="Share on Google+" target="_blank" class="btn tombol-googleplus"><i class="fa fa-google-plus"></i> Google+</a>
                        <a href="" class="btn tombol-pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
                        <a href="" class="btn tombol-linkedin"><i class="fa fa-linkedin"></i> LinkedIn</a>
                    </div></div><hr></div></div></div></div></div></div><hr>
<?php endforeach;?>
<!-- cardfinish -->
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
      <!--FOOTER-->
      <div class="footer-bottom">
        <div class="container-fluid text-center">
            <p class="text-white"> Developed by.<a class="text-white" href="index.php">Sorange.ID</a></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>