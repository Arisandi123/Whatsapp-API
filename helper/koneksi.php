<?php
// source code by Ditzzy
//Change Ur Database here
$host = "localhost";
$username = "u2gshxce_wagw";
$password = "u2gshxce_wagw";
$db = "u2gshxce_wagw";
error_reporting(0);
$koneksi = mysqli_connect($host, $username, $password, $db) or die("GAGAL");

$base_url = "https://localhost:8080/";
date_default_timezone_set('Asia/Jakarta');
