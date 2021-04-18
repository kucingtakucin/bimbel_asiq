<?php
use Arthur\Core\App\Controller;

class HomeController extends Controller {

    /**
     * @inheritDoc
     * @return void
     */
    public function index(): void
    {
        // TODO: Implement index() method.
        $data = [
            'title' => 'Home'
        ];
        $this->view('index', $data);
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        session_start();
        session_unset();
        session_destroy();
        setcookie('key', null, time() - (60 ** 2));
        setcookie('value', null, time() - (60 ** 2));
        header('Location: ' . BASE_URL);
        exit(0);
    }
}