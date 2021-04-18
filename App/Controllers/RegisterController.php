<?php

use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

/**
 * @method model(string $string)
 */
class RegisterController extends Controller {

    /**
     * @inheritDoc
     * @return void
     */
    public function index(): void
    {
        $data = [
            'title' => 'Register Page'
        ];
        $this->view('index', $data);
    }

    /**
     * @return void
     */
    public function register(): void
    {
        try {
            if ($this->model('Users')->add()):
                Flasher::set('Register', 'berhasil! ', 'Silakan login terlebih dahulu!', 'success');
                $this->redirect('/Login');
            endif;
        } catch (Exception $exception) {
            Flasher::set('Register', 'gagal! ', $exception->getMessage(), 'danger');
            $this->redirect('/Register');
        }
    }
}