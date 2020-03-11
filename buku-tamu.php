<html>
<head>
<title>Buku Tamu Sederhana - Masarif.id</title>
<style>
body{font-family:'Arial';font-size:18px;margin:0}
.kecil{font-size:10px}
a{color:#3498db}
a:hover{color:#2980b9}
input[type=text]{margin:5px auto 15px;padding:10px;color:#444;width:300px}
fieldset{border:1px solid #ccc;width:50%;margin-left:auto;margin-right:auto;margin-top:10px;}
input[type=submit]{color:#FFF;padding:0 20px;margin:10px 0 5px;cursor:pointer;background-color:#333;border:0;height:30px}
.tanggal{float:right;font-size:12px}
input[type=submit]:hover{background-color:#444}
input[type=submit]:active{position:relative;top:2px}
</style>
</head>
<body>
<fieldset>
<legend>Buku Tamu</legend>
<form action="simpan.php" method="post">
<p>Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="Nama lengkap anda" type="text" name="nama" required/>
</p>
<p>Email (opsional) &nbsp;&nbsp;&nbsp;&nbsp;:
<input placeholder="Deny10@gmail.com" type="text" name="email"/>
</p>
<p>Isi:
<textarea placeholder="Ketikan suatu pesan anda" cols="90" rows="10" name="isi" required></textarea>
</p>
<p>
<input type="submit" value="Simpan"/>
</p>
</form>
<?php
include("koneksi.php");
$query=mysqli_query($koneksi,'select * from dataku');
while($data=mysqli_fetch_array($query))
{
$nama = $data['nama'];
$email= $data['email'];
$isi = $data['isi'];
echo "
<b>$nama</b>

<i class='ganti'>'$pesan'</i> <br/>
<a class='kecil' title='Kirim Email' href='mailto:$email'>[EMAIL]</a> <br/><br/>
";}
?>
</fieldset>
</body>
</html>