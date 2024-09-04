<?
include("koneksi.php");

$semua_mahasiswa = $db->query("SELECT * FROM mahasiswa");
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
    <div id="alert-container" class="z-50 p-4 flex flex-col gap-2 absolute top-0 left-0 right-0">
        <div id="alert-success" class="hidden items-center p-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="alert-success-message" class="ms-3 text-sm font-medium"></div>
            <button id="btn-alert-success" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>

        <div id="alert-error" class="hidden items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>
            <span class="sr-only">Info</span>
            <div id="alert-error-message" class="ms-3 text-sm font-medium"></div>
            <button id="btn-alert-error" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-2" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    </div>

    <main>
        <section class="px-24 pt-16 flex flex-col ">
            <a class="bg-blue-600 ms-auto text-neutral-50 px-2 py-1 rounded-md" href="form-input.php">+ Input</a>
            <div class="relative overflow-x-auto mt-2 shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                No
                            </th>
                            <th scope="col" class="px-6 py-3">
                                NPM
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jenis Kelamin
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Jurusan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Alamat
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Aksi
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <? foreach ($semua_mahasiswa as $key => $m) { ?>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    <?= $key + 1 ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $m["npm"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $m["nama"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $m["jenis_kelamin"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $m["jurusan"] ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?= $m["alamat"] ?>
                                </td>
                                <td class="px-6 py-4 text-right flex justify-evenly">
                                    <a href="form-edit.php?npm=<?= $m["npm"] ?>" class="font-medium text-yellow-600 dark:text-yellow-500 hover:underline">Edit</a>
                                    <a href="proses-delete.php?npm=<?= $m["npm"] ?>" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                                </td>
                            </tr>
                        <? } ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script>
        const alertSuccess = document.querySelector("#alert-success");
        const alertError = document.querySelector("#alert-error");
        const alertSuccessMessage = document.querySelector("#alert-success-message");
        const alertErrorMessage = document.querySelector("#alert-error-message");
        document.querySelector("#btn-alert-success").addEventListener("click", (e) => {
            alertSuccess.classList.add("hidden")
        })
        document.querySelector("#btn-alert-error").addEventListener("click", (e) => {
            alertError.classList.add("hidden")
        })
        const searchParams = new URLSearchParams(window.location.search);
        if (searchParams.has("success")) {
            alertSuccessMessage.textContent = searchParams.get("success");
            alertSuccess.classList.remove("hidden")
            alertSuccess.classList.add("flex")
        }
        if (searchParams.has("error")) {
            alertErrorMessage.textContent = searchParams.get("error");
            alertError.classList.remove("hidden")
            alertError.classList.add("flex")
        }
    </script>
</body>

</html>