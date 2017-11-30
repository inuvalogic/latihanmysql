<?php

$host = 'locahost';
$user = 'root';
$pass = '';
$dbname = 'latihanmysql';

// PDO
$connect = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass);

$sql = "SELECT * FROM testing";
$connect->query($sql);

