<?php
use Core\App\Controller;
use Core\Helper\Flasher;

/**
 * @method model()
 */
class MahasiswaController extends Controller {

    public function __construct()
    {
        parent::__construct();
        if (!isset($_SESSION['login'])):
            Flasher::set('Silakan','login', 'terlebih dahulu!', 'warning');
            header('Location: ' . BASE_URL . 'Login');
            exit(0);
        endif;
    }

    /**
     * @inheritDoc
     */
    public function index(): void {
        // TODO: Implement index() method.
        $data = [
            'title' => 'Daftar Mahasiswa',
            'mahasiswa' => isset($_POST['keyword']) ? $this->model()->look() : $this->model()->all()
        ];
        $this->view('index', $data);
    }

    public function show(): void {
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

    public function insert(): void {
        try {
            if ($this->model()->add() > 0):
                Flasher::set('Data Mahasiswa','berhasil', 'ditambahkan!', 'success');
                header('Location: ' . BASE_URL . 'Mahasiswa');
                exit(0);
            endif;
        } catch (Exception $exception) {
            Flasher::set('Data Mahasiswa', 'gagal', 'ditambahkan! ' . $exception->getMessage(), 'danger');
            header('Location: ' . BASE_URL . 'Mahasiswa');
            exit(0);
        }
    }

    public function update(): void {
        try {
            if ($this->model()->save() > 0):
                Flasher::set('Data Mahasiswa', 'berhasil', 'diupdate!', 'success');
                header('Location: ' . BASE_URL . 'Mahasiswa');
                exit(0);
            endif;
        } catch (Exception $exception) {
            Flasher::set('Data Mahasiswa', 'gagal', 'diupdate! ' . $exception->getMessage(), 'danger');
            header('Location: ' . BASE_URL . 'Mahasiswa');
            exit(0);
        }
    }

    /**
     * @param $id
     */
    public function delete($id): void {
        try {
            if ($this->model()->remove($id) > 0):
                Flasher::set('Data Mahasiswa', 'berhasil', 'dihapus!', 'success');
                header('Location: ' . BASE_URL . 'Mahasiswa');
                exit(0);
            else:
                Flasher::set('Data Mahasiswa', 'gagal', 'dihapus!', 'danger');
                header('Location: ' . BASE_URL . 'Mahasiswa');
                exit(0);
            endif;
        } catch (Exception $exception) {
            echo "<h1>{$exception->getMessage()}</h1>";
            die;
        }
    }
}