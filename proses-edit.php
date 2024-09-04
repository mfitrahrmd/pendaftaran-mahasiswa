<?
include("./koneksi.php");

$old_npm = $_GET["npm"];

$npm = $_POST["npm"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$jurusan = $_POST["jurusan"];
$jenis_kelamin = $_POST["jenis_kelamin"];

try {
    $result = $db->query("UPDATE mahasiswa SET npm = '$npm', nama = '$nama', alamat = '$alamat', jurusan = '$jurusan', jenis_kelamin = '$jenis_kelamin' WHERE npm = '$old_npm'");
    header("Location: index.php?success=" . "mahasiswa berhasil diedit");
} catch (\Throwable $th) {
    header("Location: form-input.php?error=" . $th->getMessage());
}
