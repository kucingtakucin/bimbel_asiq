<?php

use Core\App\Controller;
use Core\Helper\Flasher;

/**
 * @method model(string $string)
 */
class RegisterController extends Controller {

    /**
     * @inheritDoc
     */
    public function index(){
        $data = [
            'title' => 'Register Page'
        ];
        $this->view('index', $data);
    }

    public function register(): void {
        try {
            if ($this->model('Users')->add()):
                Flasher::set('Register', 'berhasil! ', 'Silakan login terlebih dahulu!', 'success');
                header('Location: ' . BASE_URL . 'Login');
                exit(0);
            endif;
        } catch (Exception $exception) {
            Flasher::set('Register', 'gagal! ', $exception->getMessage(), 'danger');
            header('Location: ' . BASE_URL . 'Register');
            exit(0);
        }
    }

}