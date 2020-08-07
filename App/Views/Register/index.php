<main>
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <h1 class="font-weight-bold mt-2 text-center">Register</h1>
                <?php use Core\Helper\Flasher;
                Flasher::get() ?>
            </div>
        </div>
        <section id="main" class="d-flex flex-column align-items-center justify-content-center">
            <div class="card rounded-lg shadow-lg" style="width: 500px;">
                <div class="card-body">
                    <form action="<?= BASE_URL ?>Register/register" method="post">
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="firstname">First name</label>
                                <input type="text" class="form-control" id="firstname" name="firstname" autofocus autocomplete="off" placeholder="First name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="lastname">Last name</label>
                                <input type="text" class="form-control" id="lastname" name="lastname" autocomplete="off" placeholder="Last name" required>
                            </div>
                        </div>
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
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" autocomplete="off" placeholder="Confirm Password" required>
                        </div>
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="invalidCheck" name="checkbox" required>
                                <label class="form-check-label" for="invalidCheck">
                                    Agree to terms and conditions
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary d-block m-auto" type="submit" name="register">Register</button>
                    </form>
                </div>
            </div>
        </section>
    </div>
</main>