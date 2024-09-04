<?
include("./koneksi.php");

$npm = $_POST["npm"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$jenis_kelamin = $_POST["jenis_kelamin"];

try {
    $result = $db->query("INSERT INTO mahasiswa(npm, nama, jenis_kelamin, alamat, jurusan) VALUES('$npm', '$nama', '$jenis_kelamin', '$alamat', '$jurusan')");
    header("Location: index.php?success=" . "mahasiswa berhasil ditambahkan");
} catch (\Throwable $th) {
    header("Location: form-input.php?error=" . $th->getMessage());
}
