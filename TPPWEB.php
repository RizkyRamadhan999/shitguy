<!DOCTYPE html>
<html>
<head>
	<title>Tugas Akhir PWEB</title>
	<script type="text/javascript" src="inijs2.js"></script>
	<link rel="stylesheet" type="text/css" href="inicss2.css">
</head>
<body>
	 <br><br><br><br><br><br><br>
<div class="biodat">
	<h2 align="center">Masukkan Identitas</h2>
</div>
<div class="biodat1">
	<form action="" method="POST">
	<p align="center">
		Nama : 
	<input type="text" name="username" placeholder="Masukkan nama">
	<br><br>
		NIM : 
	<input type="text" name="nim" placeholder="Masukkan NIM">
	<br><br>
		Prodi : 
	<select name="prodi">
		<option value="">--Pilih Prodi--</option>
		<option value="1">Teknik Informatika</option>
		<option value="2">Teknik Elektro</option>
		<option value="3">Teknik Kimia</option>
		<option value="4">Teknik Industri</option>
		<option value="5">Teknologi Pangan</option>
	</select>
	<br><br>
	<input type="submit" name="input" value="INPUT" onclick="login()">
	</p>
</form>
<p align="center">YOGYAKARTA, 2019</p>
<?php
if (isset($_POST["input"])) 
{
	$username=$_POST["username"]; //variabel penampung untuk inputan username
	$inim=$_POST["nim"]; //variabel penampung untuk inputan nim
	$myfile="write.txt"; //nama txt yang akan dibuat
	$fh=fopen($myfile, 'w'); //open file write.txt
	fwrite($fh,"username : ".$username. " || password : ".$inim. " , "); //kata yang aka dicetak di file write.txt
	fclose($fh); //menutup file write.txt
}
?>
</div>
<div align="center">
	<a href="https://www.google.com" onclick="klik()"><y>GOOGLE</y></a>||
	<a href="" onclick="klik()"><y>YOUTUBE</y></a>||
	<a href="" onclick="klik()"><y>FACEBOOK</y></a>
	<br>
	<h3>UNIVERSITAS AHMAD DAHLAN</h3>
</div>
</body>
</html>
