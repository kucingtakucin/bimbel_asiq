<main>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <h1 class="font-weight-bold mt-2 text-center">Login</h1>
                <?php use Core\Helper\Flasher;
                Flasher::get() ?>
            </div>
        </div>
        <section id="main" class="d-flex flex-column align-items-center justify-content-center">
            <div class="card rounded-lg shadow-lg" style="width: 300px;">
                <div class="card-body">
                    <form action="<?= BASE_URL ?>Login/login" method="post">
                        <div class="form-row">
                            <div class="col-md-12 mb-3">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" autocomplete="off" placeholder="Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password" autocomplete="off" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="rememberme" name="rememberme">
                                <label class="form-check-label" for="rememberme">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-block m-auto" type="submit" name="login">Login</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>