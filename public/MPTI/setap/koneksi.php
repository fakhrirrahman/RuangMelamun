<?php

// Gantilah informasi koneksi berikut sesuai dengan database Anda
$host = "localhost";
$user = "root";
$password = "";
$database = "MPTI";

// Melakukan koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Memeriksa apakah koneksi berhasil
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
