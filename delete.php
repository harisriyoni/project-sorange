<?php
session_start();
include ("control/config.php");
if(!isset($_SESSION['admin_username'])){
    header("location:../login.php");
}?>
      <?php 
      $id = (int) $_GET['id'];

      if ($id) {
        $sql = "DELETE FROM berita where idkat='{$id}'";
        $query =  mysqli_query($db, $sql);
        $sql = "DELETE FROM kategori where idkat='{$id}'";
        $query =  mysqli_query($db, $sql);
      }
      header('Location: list-kategori.php');
      exit;
      ?>