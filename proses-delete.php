<?
include("koneksi.php");

$npm = $_GET["npm"];

try {
    $db->query("DELETE FROM mahasiswa WHERE npm = $npm");
    header("Location: index.php?success=" . "mahasiswa berhasil dihapus");
} catch (\Throwable $th) {
    header("Location: form-input.php?error=" . $th->getMessage());
}
