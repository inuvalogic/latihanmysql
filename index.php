<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'latihanmysql';

// PDO
$connect = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);

$sql = "SELECT * FROM test ORDER BY id DESC";

foreach ($connect->query($sql) as $row) {
	echo 'id = ' . $row['id'] . '<br>';
	echo 'judul = ' . $row['judul'] . '<br>';
	echo 'isi = ' . $row['isi'] . '<br>';
	echo '<br>';
}
