<?php include("control/config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>SORANGE.ID</title>
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
  
    <header>
        <h3 ALIGN="center">Daftar Berita</h3>
    </header>
    <nav>
        <a href="form-create.php">[+] Tambah Data</a>
    </nav>
    <br>
    <table border="2" cellpadding="10" cellspacing="0">
        <thead>
            <th>No</th>
            <th>Kategori</th>
            <th>Judul Berita</th>
            <th>Deskripsi</th>
            <th>Isi Berita</th>
            <th>Gambar</th>
            <th>Opsi</th>
        </thead>

        <tbody>
            <?php //list berita
 
            $sql = "SELECT * FROM kategori inner join berita on kategori.idkat=berita.idkat";
            $query = mysqli_query($db, $sql );
            while ($d = mysqli_fetch_array($query)){
               ?>
               <tr><td><?php echo $d['id'] ?></td>
               <td><?php echo $d['kategori'] ?></td>
               <td><?php echo $d['judul_berita'] ?></td>
               <td><?php echo $d['deskripsi'] ?></td>
               <td><?php echo $d['isi_berita'] ?></td>
               <td><?php echo $d['gambar'] ?></td>
               
               <td><a href="edit.php?id=<?= $d['id']?>">Edit</a></td>
               <td><a href="delete.php?id=<?= $d['id']?>">Hapus</a></td>
               
               
               <?php
               
            }
           

          
                
?>
      
        </tbody>
    </table>
    <p> Total : <?php echo mysqli_num_rows($query) ?></p>

    </thebody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
      
</html>