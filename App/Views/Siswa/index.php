<main>
    <div class="container mx-auto pt-5">
        <?php use Arthur\Core\Helper\Flasher;
        Flasher::get() ?>
        <section id="header" class="mb-4">
            <h1 class="text-5xl font-bold">
                Daftar Siswa
            </h1>
            <h4 class="text-muted mt-0 mb-6">Selamat datang, <?= $_SESSION['username'] ?>. Status: <span class="text-indigo-700 font-bold"><?php if ($_SESSION['role'] === '0'): ?>Admin<?php elseif($_SESSION['role'] === '1'): ?>Super Admin<?php elseif ($_SESSION['role'] === '2'):?>Guru<?php endif ?></span></h4>
            <a href="<?= BASE_URL ?>/Siswa/create" class="px-6 py-3 rounded bg-indigo-700 text-white text-sm font-bold whitespace-nowrap hover:bg-orange-500 focus:bg-orange-500">
                Tambah Data
            </a>
        </section>
        <section id="main">
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Foto
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Nama
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        NISN
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Jurusan
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Asal Sekolah
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Angkatan
                                    </th>
                                    <th scope="col" class="relative px-6 py-3">
                                        <span class="sr-only">#</span>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                <?php
                                $i = 1;
                                /** @var array $data */
                                foreach ($data['siswa'] as $student):?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-36">
                                                    <img class="h-36 rounded-full" src="<?= BASE_URL ?>/Public/img/<?= $student['foto'] ?>" alt="<?= $student['nama']?>">
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $student['nama'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $student['nisn'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $student['jurusan'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $student['asal_sekolah'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $student['angkatan'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap text-center text-lg font-medium">
                                            <a href="<?= BASE_URL ?>/Siswa/edit/<?= $student['id'] ?>" class="text-indigo-600 font-bold hover:text-indigo-900 mr-8">Edit</a>
                                            <?php if($_SESSION['role'] === '1'): ?>
                                                <form action="<?= BASE_URL ?>/Siswa/delete/<?= $student['id'] ?>" class="inline form-hapus">
                                                    <button type="submit" class="text-indigo-600 font-bold hover:text-indigo-900 tombolhapus">Delete</button>
                                                </form>
                                            <?php endif ?>
                                        </td>
                                    </tr>
                                    <?php $i++; endforeach ?>
                                <!-- More items... -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</main>
