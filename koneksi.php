<?php
// try {
//     $pdo = new PDO("mysql:localhost;dbname=dbpenjualan","root","");
//     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     echo "Koneksi ke Database Berhasil";
// } catch (PDOExpection $e) {
//     echo "Koneksi gagal :".$e->getMessage();
// }
$mysqli = new mysqli("localhost","root","","dbpenjualan");
if($mysqli->connect_error){
    die("Koneksi gagal :".$mysqli->connect_error);
}