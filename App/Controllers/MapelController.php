<?php
use Arthur\Core\App\Controller;
use Arthur\Core\Helper\Flasher;

/**
 * @method model()
 */
class MapelController extends Controller {

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
        $data = [
            'title' => 'Mata Pelajaran',
            'mapel' => $this->model()->all()
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
        $this->view('create', ['title' => 'Mapel| Create']);
    }

    /**
     * @return void
     */
    public function insert(): void
    {
        try {
            $this->model()->add();
            Flasher::set('Mata Pelajaran','berhasil', 'ditambahkan!', 'success');
            $this->redirect('/Mapel');
        } catch (Exception $exception) {
            Flasher::set('Mata Pelajaran', 'gagal', 'ditambahkan! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Mapel');
        }
    }

    public function edit($id): void
    {
        $data = [
            'title' => 'Mapel | Edit',
            'mapel' => $this->model()->single($id)
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
            Flasher::set('Mata Pelajaran', 'berhasil', 'diupdate!', 'success');
            $this->redirect('/Mapel');
        } catch (Exception $exception) {
            Flasher::set('Mata Pelajaran', 'gagal', 'diupdate! ' . $exception->getMessage(), 'danger');
            $this->redirect('/Mapel');
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
                Flasher::set('Mata Pelajaran', 'berhasil', 'dihapus!', 'success');
                $this->redirect('/Mapel');
            else:
                Flasher::set('Mata Pelajaran', 'gagal', 'dihapus!', 'danger');
                $this->redirect('/Mapel');
            endif;
        } catch (Exception $exception) {
            echo "<h1>{$exception->getMessage()}</h1>";
            die;
        }
    }
    
}