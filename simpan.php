<?php
include("koneksi.php");
$nama=$_POST['nama'];
$email=$_POST['email'];
$isi = $_POST['isi'];
$sql="insert into dataku(nama,email,isi) values ('$nama','$email','$isi')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:buku-tamu.php');
?>