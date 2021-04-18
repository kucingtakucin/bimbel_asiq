<?php
use Arthur\Core\App\Model;

class SiswaModel extends Model {

    /**
     * @inheritDoc
     * @return int
     */
    public function add(): int
    {
        $query = "INSERT INTO {$this->tableName} (nama, nisn, jurusan, asal_sekolah, angkatan, foto) VALUES (:nama, :nisn, :jurusan, :asal_sekolah, :angkatan, :foto)";
        $this->db->prepare($query);
        $this->db->bind('nama', htmlspecialchars(trim($_POST['nama'])));
        $this->db->bind('nisn', htmlspecialchars(trim($_POST['nisn'])));
        $this->db->bind('jurusan', htmlspecialchars(trim($_POST['jurusan'])));
        $this->db->bind('asal_sekolah', htmlspecialchars(trim($_POST['asal_sekolah'])));
        $this->db->bind('angkatan', htmlspecialchars(trim($_POST['angkatan'])));
        $this->db->bind('foto', $this->upload_image());
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function save(): int
    {
        $query = "UPDATE {$this->tableName} SET nama = :nama, nisn = :nisn, jurusan = :jurusan, asal_sekolah = :asal_sekolah, angkatan = :angkatan, foto = :foto WHERE id = :id";
        $this->db->prepare($query);
        $this->db->bind('nama', htmlspecialchars(trim($_POST['nama'])));
        $this->db->bind('nisn', htmlspecialchars(trim($_POST['nisn'])));
        $this->db->bind('jurusan', htmlspecialchars(trim($_POST['jurusan'])));
        $this->db->bind('asal_sekolah', htmlspecialchars(trim($_POST['asal_sekolah'])));
        $this->db->bind('angkatan', htmlspecialchars(trim($_POST['angkatan'])));
        $fotolama = $_POST['fotolama'];
        if ($_FILES['foto']['error'] === 4) {
            $fotobaru = $fotolama;
        } else {
            $fotobaru = $this->upload_image();
        }
        $this->db->bind('foto', $fotobaru);
        $this->db->bind('id', htmlspecialchars(trim($_POST['id'])));
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * @return string
     */
    public function upload_image(): string
    {
        $filename = $_FILES['foto']['name'];
        $filesize = $_FILES['foto']['size'];
        $errorfile = $_FILES['foto']['error'];
        $tmpname = $_FILES['foto']['tmp_name'];
        if ($errorfile === 4):
            throw new \RuntimeException("Gagal mengupload gambar karena kesalahan yang tidak diketahui!", 1);
        endif;

        $validextension = ['jpg', 'jpeg', 'png', 'svg'];
        $array = explode('.', $filename);
        $prefixfilename = strtolower($array[0]);
        $fileextension = strtolower(end($array));
        if (!in_array($fileextension, $validextension)):
            throw new \RuntimeException("Yang kamu masukkan bukan gambar!", 1);
        endif;
        if ($filesize > 1000000):
            throw new \RuntimeException("Ukuran gambar kamu terlalu besar! Max. 1MB", 1);
        endif;

        $newfilename = uniqid($prefixfilename, true) . ".$fileextension";
        move_uploaded_file($tmpname, __DIR__ . "/../../Public/img/$newfilename");
        return $newfilename;
    }

    /**
     * @return array
     */
    public function look(): array
    {
        $query = "SELECT * FROM {$this->tableName} WHERE nama LIKE :keyword OR nisn LIKE :keyword OR jurusan LIKE :keyword OR angkatan LIKE :keyword";
        $keyword = $this->db->quote(htmlspecialchars(trim($_POST['keyword'])));
        $this->db->prepare($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->fetchAll();
    }
}