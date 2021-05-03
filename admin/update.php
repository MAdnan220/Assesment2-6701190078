<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$id = $_POST['id'];
$semester = $_POST['semester'];
$ip = $_POST['ip'];

// update data ke database
mysqli_query($koneksi,"update nilai set semester='$semester', ip='$ip' where id='$id'");

// mengalihkan halaman kembali ke index.php
header("location:datanilai.php");

?>