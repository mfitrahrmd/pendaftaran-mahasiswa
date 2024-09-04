<?php
$server = "mysql";
$user = "root";
$password = "root";
$db = new PDO("mysql:host=mysql;dbname=pendaftaran_mahasiswa", $user, $password);
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

$create_table_calon_siswa = file_get_contents("./mahasiswa.sql");
$db->query($create_table_calon_siswa);
