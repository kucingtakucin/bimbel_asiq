<main>
    <div class="container mx-auto">
        <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ]
  }
  ```
-->
        <h1 class="text-5xl font-bold mt-5">
            Form Siswa
        </h1>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Data Siswa
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="<?= BASE_URL ?>/Siswa/update/<?=  /** @var array $data */ $data['siswa']['id'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="nisn" class="block text-sm font-medium text-gray-700">NISN</label>
                                        <input type="text" name="nisn" id="nisn" value="<?= $data['siswa']['nisn'] ?>" autocomplete="off" required class="form-input px-4 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="nama" class="block text-sm  font-medium text-gray-700">Nama Lengkap</label>
                                        <input type="text" name="nama" id="nama" value="<?= $data['siswa']['nama'] ?>" autocomplete="off" required class="form-input px-4 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>


                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="asal_sekolah" class="block text-sm font-medium text-gray-700">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?= $data['siswa']['asal_sekolah'] ?>" autocomplete="off" required class="form-input px-4 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="angkatan" class="block text-sm font-medium text-gray-700">Angkatan</label>
                                        <input type="text" name="angkatan" id="angkatan" value="<?= $data['siswa']['angkatan'] ?>" autocomplete="off" required class="form-input px-4 py-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-2">
                                        <label for="jurusan" class="block text-sm font-medium text-gray-700">Jurusan</label>
                                        <select id="jurusan" name="jurusan" autocomplete="off" required class="form-select mt-1 block w-full px-4 py-2 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <option selected><?= $data['siswa']['jurusan'] ?></option>
                                            <option value="SAINTEK">SAINTEK</option>
                                            <option value="SOSHUM">SOSHUM</option>
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label class="block text-sm font-medium text-gray-700">
                                            Photo
                                        </label>
                                        <div class="mt-1 flex items-center">
                                            <div class="inline-block h-60 rounded-full overflow-hidden bg-gray-100">
                                                <img src="<?= BASE_URL?>/Public/img/<?= $data['siswa']['foto'] ?>" alt="<?= $data['siswa']['nama'] ?>" class="h-60">
                                            </div>
                                            <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Change
                                            </button>
                                        </div>

                                        <div class="py-2">
                                            <label class="block text-sm font-medium text-gray-700">
                                                Cover photo
                                            </label>
                                            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                                <div class="space-y-1 text-center">
                                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                    <div class="flex text-sm text-gray-600">
                                                        <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                            <span>Upload a file</span>
                                                            <input id="file-upload" name="foto" type="file" class="sr-only">
                                                        </label>
                                                        <p class="pl-1">or drag and drop</p>
                                                    </div>
                                                    <p class="text-xs text-gray-500">
                                                        PNG, JPG, GIF up to 10MB
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" name="id" value="<?= $data['siswa']['id'] ?>">
                                        <input type="hidden" name="fotolama" value="<?= $data['siswa']['foto'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="px-4 py-2 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>
    </div>
</main>