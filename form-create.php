<?php
session_start();
include ("control/config.php");
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login_.css">

    <title>SORANGE.ID</title>
</head>
<body>
<nav>
        <div class="logo">
            <h4>ADMINISTRATOR</h4>
        </div>
        <ul><li><a href="index.php">Home</a></li>
        <li><a href="login.php">Portal Berita</a></li>
    <li><a href="form-create.php">Upload Berita</a></li>
    <li><a href="list-kategori.php">Daftar Berita</a></li>
    <li><a href="logout.php">Logout</a></li></ul>
        
  
  
      </nav>
      <script src="js/ss.js"></script>
      <br>
    <br>
    <div class="app" ALIGN="center">
    <header>
         <h1>Upload Berita</h1>
    </header>

    <form action="" method="POST">
        <ul>
        <td><input type="hidden" name="id" value="<?php echo $d['id']; ?>" ></td>
            <td><input type="hidden" name="idkat" value="<?php echo $d['idkat']; ?>" ></td>
            <td>
            <label for="kategori">Kategori :</label>
                <input type="text" name="kategori" id="kategori">
            </td>
            <br>
            <br>
               <td>
               <label for="judul_berita">Judul Berita :</label>
                <input type="text" name="judul_berita" id="judul_berita">
               </td>
               <br>
               <br>
            <td>
                 <label for="deskripsi">Deskripsi</label>
                <input type="textarea" name="deskripsi" id="deksripsi">
            </td>   
            <br>
            <br>
            <td>
                 <label for="isi_berita">Isi Berita :</label>
                <textarea type="textarea" name="isi_berita" id="isi_berita" rows="8"></textarea>
            </td>   
            <br>
            <br>
            <td>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar"><br><br><br>
            </td>
            <br>
            <br>
            <td>
                <button type="submit" name="submit">Submit</button>
            </td>
        </ul>
    </form>
    
    <?php
    if ($_POST) {
        $sql = "INSERT INTO kategori (kategori) values ('{$_POST['kategori']}')";
        $query = mysqli_query($db,$sql);
        $sql = "SELECT max(idkat) AS idlast from kategori ";
        $query = mysqli_query($db,$sql);
        $data = mysqli_fetch_array($query);
        $idlast = $data['idlast'];
        $sql = "INSERT INTO berita (idkat, judul_berita, deskripsi, isi_berita, gambar) VALUES ('$idlast', '{$_POST['judul_berita']}', 
        '{$_POST['deskripsi']}', '{$_POST['isi_berita']}', '{$_POST['gambar']}')";
        $query = mysqli_query($db, $sql);};
    ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
     
</body>
</html>