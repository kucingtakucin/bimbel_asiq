<main>
    <div class="container mx-auto pt-5">
        <?php use Arthur\Core\Helper\Flasher;
        Flasher::get() ?>
        <section id="header" class="mb-4">
            <h1 class="text-5xl font-bold">
                Mata Pelajaran
            <h4 class="text-muted mt-0 mb-6">Selamat datang, <?= $_SESSION['username'] ?>. Status: <span class="text-indigo-700 font-bold"><?php if ($_SESSION['role'] === '0'): ?>Admin<?php elseif($_SESSION['role'] === '1'): ?>Super Admin<?php elseif ($_SESSION['role'] === '2'):?>Guru<?php endif ?></span></h4>
            <a href="<?= BASE_URL ?>/Mapel/create" class="px-6 py-3 rounded bg-indigo-700 text-white text-sm font-bold whitespace-nowrap hover:bg-orange-500 focus:bg-orange-500">
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
                                        Kode Mapel
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Mata Pelajaran
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
                                foreach ($data['mapel'] as $teacher):?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $teacher['kode_mapel'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap">
                                            <div class="text-sm text-gray-900"><?= $teacher['nama_mapel'] ?></div>
                                        </td>
                                        <td class="px-6 py-1 whitespace-nowrap text-center text-lg font-medium">
                                            <a href="<?= BASE_URL ?>/Mapel/edit/<?= $teacher['id'] ?>" class="text-indigo-600 font-bold hover:text-indigo-900 mr-8">Edit</a>
                                            <?php if($_SESSION['role'] === '1'): ?>
                                                <form action="<?= BASE_URL ?>/Mapel/delete/<?= $teacher['id'] ?>" id="form-hapus" class="inline">
                                                    <button type="submit" class="text-indigo-600 font-bold hover:text-indigo-900" id="tombol-hapus">Delete</button>
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
