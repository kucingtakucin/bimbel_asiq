<?php
use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

/**
 * @method model()
 */
class GuruController extends Controller {
    /**
     * MahasiswaController constructor.
     */
    public function __construct()
    {
        parent::__construct();
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
        $data = [
            'title' => 'Daftar Guru',
            'guru' => $this->model()->all()
        ];
       $this->view('index', $data);
    }

    /**
     * @return void
     */
    public function show(): void
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
        if ($contentType === "application/json"):
            $content = trim(file_get_contents("php://input"));
            try {
                $data = json_decode($content, true, 512, JSON_THROW_ON_ERROR);
            } catch (JsonException $exception) {
                echo "<h1>{$exception->getMessage()}</h1>";
                die;
            }

            try {
                echo json_encode($this->model()->single($data['id']), JSON_THROW_ON_ERROR);
            } catch (JsonException $exception) {
                echo "<h1>{$exception->getMessage()}</h1>";
                die;
            }
        endif;
    }

    public function create(): void
    {
        $this->view('create', ['title' => 'Guru| Create']);
    }

    /**
     * @return void
     */
    public function insert(): void
    {
        try {
            $this->model()->add();
            Flasher::set('Data Guru','berhasil', 'ditambahkan!', 'success');
            $this->redirect('/Guru');
        } catch (Exception $exception) {
            Flasher::set('Data Guru', 'gagal', 'ditambahkan! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Guru');
        }
    }

    public function edit($id): void
    {
        $data = [
            'title' => 'Guru | Edit',
            'guru' => $this->model()->single($id)
        ];
        $this->view('edit', $data);
    }

    /**
     * @return void
     */
    public function update(): void
    {
        try {
            $this->model()->save();
            Flasher::set('Data Guru', 'berhasil', 'diupdate!', 'success');
            $this->redirect('/Guru');
        } catch (Exception $exception) {
            Flasher::set('Data Guru', 'gagal', 'diupdate! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Guru');
        }
    }

    /**
     * @param $id
     * @return void
     */
    public function delete($id): void
    {
        try {
            if ($this->model()->remove($id) > 0):
                Flasher::set('Data Guru', 'berhasil', 'dihapus!', 'success');
                $this->redirect('/Guru');
            else:
                Flasher::set('Data Guru', 'gagal', 'dihapus!', 'danger');
                $this->redirect('/Guru');
            endif;
        } catch (Exception $exception) {
            echo "<h1>{$exception->getMessage()}</h1>";
            die;
        }
    }
}