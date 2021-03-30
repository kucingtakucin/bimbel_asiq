<main>
    <div class="container mx-auto">
        <div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                        Sign up your account
                    </h2>
                </div>
                <?php use Arthur\Core\Helper\Flasher;
                Flasher::get() ?>
                <form class="mt-8 space-y-6" action="<?= BASE_URL ?>/Register/register" method="POST">
                    <input type="hidden" name="remember" value="true">
                    <div class="rounded-md shadow-sm -space-y-px">
                        <div>
                            <label for="firstname" class="sr-only">First Name</label>
                            <input id="firstname" name="firstname" type="text" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First Name">
                        </div>
                        <div>
                            <label for="lastname" class="sr-only">Last Name</label>
                            <input id="lastname" name="lastname" type="text" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last Name">
                        </div>
                        <div>
                            <label for="email" class="sr-only">Email</label>
                            <input id="email" name="email" type="email" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Email">
                        </div>
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Password">
                        </div>
                        <div>
                            <label for="confirmpassword" class="sr-only">Confirm Password</label>
                            <input id="confirmpassword" name="confirmpassword" type="password" autocomplete="off" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="agreement" name="agreement" required type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded">
                            <label for="agreement" class="ml-2 block text-sm text-gray-900">
                                Agree to terms and conditions
                            </label>
                        </div>
                    </div>

                    <div>
                        <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                            <!-- Heroicon name: solid/lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                          </span>
                            Sign in
                        </button>
                    </div>
                </form>
            </div>
        </div>
<!--        <div class="row">-->
<!--            <div class="col-lg-6 m-auto">-->
<!--                <h1 class="font-weight-bold mt-2 text-center">Register</h1>-->
<!--                --><?php //use Arthur\Core\Helper\Flasher;
//                Flasher::get() ?>
<!--            </div>-->
<!--        </div>-->
<!--        <section id="main" class="d-flex flex-column align-items-center justify-content-center">-->
<!--            <div class="card rounded-lg shadow-lg" style="width: 500px;">-->
<!--                <div class="card-body">-->
<!--                    <form action="--><?//= BASE_URL ?><!--/Register/register" method="post">-->
<!--                        <div class="form-row">-->
<!--                            <div class="col-md-6 mb-3">-->
<!--                                <label for="firstname">First name</label>-->
<!--                                <input type="text" class="form-control" id="firstname" name="firstname" autofocus autocomplete="off" placeholder="First name" required>-->
<!--                            </div>-->
<!--                            <div class="col-md-6 mb-3">-->
<!--                                <label for="lastname">Last name</label>-->
<!--                                <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" placeholder="Last name" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-row">-->
<!--                            <div class="col-md-12 mb-3">-->
<!--                                <label for="email">Email</label>-->
<!--                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email" required>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="password">Password</label>-->
<!--                            <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" required>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <label for="confirmpassword">Confirm Password</label>-->
<!--                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" autocomplete="off" placeholder="Confirm Password" required>-->
<!--                        </div>-->
<!--                        <div class="form-group">-->
<!--                            <div class="form-check">-->
<!--                                <input class="form-check-input" type="checkbox" id="invalidCheck" name="checkbox" required>-->
<!--                                <label class="form-check-label" for="invalidCheck">-->
<!--                                    Agree to terms and conditions-->
<!--                                </label>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                        <button class="btn btn-primary d-block m-auto" type="submit" name="register">Register</button>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
    </div>
</main>
