<?
include("koneksi.php");

$npm = $_GET["npm"];

$mahasiswa = $db->query("SELECT * FROM mahasiswa WHERE npm = $npm LIMIT 1")->fetch();

$jurusan = array("Teknik Informatika", "Teknik Mesin", "Teknik Sipil", "Sistem Informasi", "Manajemen", "Akuntansi");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Digital Talent</title>
</head>

<body>
    <main>
        <section class="px-24 pt-24">
            <form class="py-8" action="proses-edit.php?npm=<?= $mahasiswa["npm"] ?>" method="post">
                <div class="space-y-12">
                    <div>
                        <h2 class="text-base font-semibold leading-7 text-gray-900">Edit Mahasiswa</h2>

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="col-span-full">
                                <label for="npm" class="block text-sm font-medium leading-6 text-gray-900">NPM</label>
                                <div class="mt-2">
                                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 sm:max-w-md">
                                        <input value="<?= $mahasiswa["npm"] ?>" type="text" name="npm" id="npm" autocomplete="npm" class="block flex-1 border-0 bg-transparent py-1.5 pl-1 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="nama" class="block text-sm font-medium leading-6 text-gray-900">Nama</label>
                                <div class="mt-2">
                                    <input value="<?= $mahasiswa["nama"] ?>" id="nama" name="nama" type="text" autocomplete="nama" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="alamat" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                                <div class="mt-2">
                                    <textarea id="alamat" name="alamat" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"><?= $mahasiswa["alamat"] ?></textarea>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="jurusan" class="block text-sm font-medium leading-6 text-gray-900">Jurusan</label>
                                <div class="mt-2">
                                    <select class="px-2 py-1 bg-transparent border rounded-lg" id="jurusan" name="jurusan" autocomplete="jurusan" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                        <? foreach ($jurusan as $j) { ?>
                                            <option value="<?= $j ?>" <?= $mahasiswa["jurusan"] == $j ? "selected" : "" ?>><?= $j ?></option>
                                        <? } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <fieldset>
                                    <legend class="text-sm font-semibold leading-6 text-gray-900">Jenis Kelamin</legend>
                                    <div class="mt-6 space-y-6">
                                        <div class="flex items-center gap-x-3">
                                            <input <?= $mahasiswa["jenis_kelamin"] == "L" ? "checked" : "" ?> value="L" id="laki-laki" name="jenis_kelamin" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="laki-laki" class="block text-sm font-medium leading-6 text-gray-900">Laki-laki</label>
                                        </div>
                                        <div class="flex items-center gap-x-3">
                                            <input <?= $mahasiswa["jenis_kelamin"] == "P" ? "checked" : "" ?> value="P" id="perempuan" name="jenis_kelamin" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                            <label for="perempuan" class="block text-sm font-medium leading-6 text-gray-900">Perempuan</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-16 flex items-center justify-start gap-x-6">
                    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
                </div>
            </form>
        </section>
    </main>
</body>

</html>