<?php

$host = 'locahost';
$user = 'root';
$pass = '';
$dbname = 'latihanmysql';

// PHP 5 kebawah
$connect = mysql_connect($host, $user, $pass);
mysql_select_db($dbname, $connect);
$sql = "SELECT ....";
mysql_query($sql);

// PHP modern
// alternatif PDO, jika masih menggunakan MySQL

// procedural style
$connect = mysqli_connect($host, $user, $pass, $dbname);
$sql = "SELECT ....";
mysqli_query($connect, $sql);

// object oriented style
$connect = new mysqli($host, $user, $pass, $dbname);
$sql = "SELECT ....";
$connect->query($sql);

// PDO
$connect = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);
$sql = "SELECT ....";
$connect->query($sql);

