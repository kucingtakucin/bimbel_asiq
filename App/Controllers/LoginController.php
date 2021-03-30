<?php
use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

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
        if (isset($_SESSION['login'])) {
            $this->redirect('/Home');
        }
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
            if ($this->model('users')->check()):
                Flasher::set('Login', 'berhasil!', '', 'success');
                $this->redirect('/Mahasiswa');
            endif;
        } catch (Exception $exception) {
            Flasher::set('Login', 'gagal! ', $exception->getMessage(), 'danger');
            $this->redirect('/Login');
        }
    }
}