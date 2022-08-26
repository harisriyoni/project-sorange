<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
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
    <li><a href="list-kategori.php">Data Kategori Berita</a></li>
    <li><a href="logout.php">Logout</a></li></ul>
    </nav>
      <script src="js/ss.js"></script>
      <br><br>
    <?php
    include ("control/config.php");
    $id = (int) $_GET['id'];
   $sql = "SELECT * FROM kategori inner join berita on kategori.idkat=berita.idkat WHERE kategori.idkat='$id'";
   $query = mysqli_query($db, $sql);
   $data = mysqli_fetch_array($query);?>
    <form action="" method="post">
    <ul>
        <td><input type="hidden" name="id" value="<?php echo $data['id']; ?>" ></td>
            <td><input type="hidden" name="idkat" value="<?php echo $data['idkat']; ?>" ></td>
            <td>
            <label for="kategori">Kategori :</label>
                <input type="text" name="kategori" id="kategori" >
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
                <input type="textarea" name="deskripsi" id="deksripsi " >
            </td>   
            <br>
            <br>
            <td>
                 <label for="isi_berita">Isi Berita :</label>
                <textarea type="textarea" name="isi_berita" id="isi_berita" rows="8" ></textarea>
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
        $sql = "UPDATE kategori SET kategori='{$_POST['kategori']}' where idkat='{$_POST['id']}'";
        $query = mysqli_query($db, $sql);
        $sql = "UPDATE berita SET judul_berita='{$_POST['judul_berita']}',
                                deskripsi='{$_POST['deskripsi']}',
                                isi_berita='{$_POST['isi_berita']}',
                                gambar='{$_POST['gambar']}' where idkat='{$_POST['id']}'";
        $query = mysqli_query($db, $sql);
        if ($query){
            echo "data berhasil di ubah";
            header('Location: list-kategori.php');
        } else {
            echo "data gagal diubah: ".mysqli_error();
        }}?>
</body>
</html>