<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= /** @var array $data */ $data['title'] ?></title>
    <link rel="icon" type="image/png" href="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
    <link rel="stylesheet" href="<?= BASE_URL ?>/Public/css/tailwind.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
</head>
<body>
<header>
    <nav>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="relative bg-white">
            <div class="max-w-full mx-auto px-4 sm:px-6">
                <div class="flex justify-between items-center border-b-2 border-gray-100 py-2 md:justify-start md:space-x-10">
                    <div class="flex justify-start lg:w-0 lg:flex-1">
                        <a href="<?= BASE_URL ?>">
                            <span class="sr-only">Workflow</span>
                            <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
                        </a>
                    </div>
                    <div class="-mr-2 -my-2 md:hidden">
                        <button type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                            <span class="sr-only">Open menu</span>
                            <!-- Heroicon name: outline/menu -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>
                    <nav class="hidden md:flex space-x-10">
                        <a href="<?= BASE_URL ?>" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Home
                        </a>
                        <a href="<?= BASE_URL ?>/About" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            About
                        </a>
                        <?php if(isset($_SESSION['login'])):?>
                        <a href="<?= BASE_URL ?>/Siswa" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Siswa
                        </a>
                        <a href="<?= BASE_URL ?>/Guru" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Guru
                        </a>
                        <a href="<?= BASE_URL ?>/Mapel" class="text-base font-medium text-gray-500 hover:text-gray-900">
                            Mapel
                        </a>
                        <?php endif ?>
                    </nav>
                    <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                        <?php if(isset($_SESSION['login'])): ?>
                            <a href="<?= BASE_URL ?>/index/logout" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Logout
                            </a>
                        <?php else: ?>
                            <a href="<?= BASE_URL ?>/Login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                                Login
                            </a>
                            <a href="<?= BASE_URL ?>/Register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
                                Register
                            </a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
