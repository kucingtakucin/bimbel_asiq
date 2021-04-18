<?php
use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

/**
 * @method model()
 */
class SiswaController extends Controller {

    /**
     * SiswaController constructor.
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
        // TODO: Implement index() method.
        $data = [
            'title' => 'Daftar Siswa',
            'siswa' => $this->model()->all()
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
        $this->view('create', ['title' => 'Siswa | Create']);
    }

    /**
     * @return void
     */
    public function insert(): void
    {
        try {
            $this->model()->add();
            Flasher::set('Data Siswa','berhasil', 'ditambahkan!', 'success');
            $this->redirect('/Siswa');
        } catch (Exception $exception) {
            Flasher::set('Data Siswa', 'gagal', 'ditambahkan! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Siswa');
        }
    }

    public function edit($id): void
    {
        $data = [
            'title' => 'Siswa | Edit',
            'siswa' => $this->model()->single($id)
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
            Flasher::set('Data Siswa', 'berhasil', 'diupdate!', 'success');
            $this->redirect('/Siswa');
        } catch (Exception $exception) {
            Flasher::set('Data Siswa', 'gagal', 'diupdate! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Siswa');
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
                Flasher::set('Data Siswa', 'berhasil', 'dihapus!', 'success');
                $this->redirect('/Siswa');
            else:
                Flasher::set('Data Siswa', 'gagal', 'dihapus!', 'danger');
                $this->redirect('/Siswa');
            endif;
        } catch (Exception $exception) {
            echo "<h1>{$exception->getMessage()}</h1>";
            die;
        }
    }
}