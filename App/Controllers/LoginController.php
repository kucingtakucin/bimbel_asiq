<?php
use Core\App\Controller;
use Core\Helper\Flasher;

/**
 * @method model(string $string)
 */
class LoginController extends Controller {

    /**
     * @inheritDoc
     * @return void
     */
    public function index(): void
    {
        $data = [
            'title' => 'Login Page'
        ];
        $this->view('index', $data);
    }

    /**
     * @return void
     */
    public function login(): void
    {
        try {
            if ($this->model('Users')->check()):
                Flasher::set('Login', 'berhasil', '', 'success');
                header('Location: ' . BASE_URL . 'Mahasiswa');
                exit(0);
            endif;
        } catch (Exception $exception) {
            Flasher::set('Login', 'gagal! ', $exception->getMessage(), 'danger');
            header('Location: ' . BASE_URL . 'Login');
            exit(0);
        }
    }
}