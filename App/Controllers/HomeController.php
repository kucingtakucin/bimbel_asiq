<?php
use Core\App\Controller;

class HomeController extends Controller {

    /**
     * @inheritDoc
     */
    public function index(): void {
        // TODO: Implement index() method.
        $data = [
            'title' => 'Home',
            'nama' => 'Adam',
            'panggil' => 'Arthur'
        ];
        $this->view('index', $data);
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        setcookie('key', null, time() - (60 ** 2));
        setcookie('value', null, time() - (60 ** 2));
        header('Location: ' . BASE_URL);
        exit(0);
    }
}