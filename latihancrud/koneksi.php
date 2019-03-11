<?php 
 
	$server = "localhost";//nama server
	$user = "root"; //username server
	$pass = "";  //password
	$dbase = "db_kelas"; // database yang dipakai
 
	//Membuat koneksi
	$koneksi = mysqli_connect($server, $user, $pass, $dbase);
 
?>