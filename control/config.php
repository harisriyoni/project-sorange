<?php
//supaya array lebih mudah
$server = "sql6.freemysqlhosting.net";
$user = "sql6516738";
$password = "N7Nx9VSm2W";
$namadb = "sql6516738";
//agar config connect dengan sql
$db = mysqli_connect($server, $user, $password, $namadb);
//check apakah config connect dengan sql atau tidak
if(!$db) {
    die("gagal terhubung dengan database : " . mysqli_connect_error());
}
