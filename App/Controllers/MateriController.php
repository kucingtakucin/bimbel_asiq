<?php
use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

/**
 * @method model()
 */
class MateriController extends Controller {

    /**
     * MahasiswaController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        // Untuk mengecek apakah user sudah login atau belum
        if (!isset($_SESSION['login'])):
            Flasher::set('Silakan','login', 'terlebih dahulu!', 'warning');
            $this->redirect('/Login');
        endif;
    }

    /**
     * @inheritDoc
     * @return void
     */
    public function index(): void
    {
        $data['title'] = "Materi";
        $this->view('index', $data);
    }

    /**
     * @return void
     */
    public function show(): void
    {

    }

    public function create(): void
    {

    }

    /**
     * @return void
     */
    public function insert(): void
    {

    }

    public function edit($id): void
    {

    }

    /**
     * @return void
     */
    public function update(): void
    {

    }

    /**
     * @param $id
     * @return void
     */
    public function delete($id): void
    {

    }
}