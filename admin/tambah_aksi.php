<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$semester = $_POST['semester'];
$ip = $_POST['ip'];

// menginput data ke database
mysqli_query($koneksi,"insert into nilai values('','$semester','$ip')");

// mengalihkan halaman kembali ke index.php
header("location:datanilai.php");

?>