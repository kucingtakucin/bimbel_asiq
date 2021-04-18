<?php
use Arthur\Core\App\Model;

class MapelModel extends Model {

    /**
     * @inheritDoc
     * @return int
     */
    public function add(): int
    {
        $query = "INSERT INTO {$this->tableName} (id_materi, kode_mapel, nama_mapel) VALUES (:id_materi, :kode_mapel, :nama_mapel)";
        $this->db->prepare($query);
        $this->db->bind('nama_mapel', htmlspecialchars(trim($_POST['nama_mapel'])));
        $this->db->bind('kode_mapel', htmlspecialchars(trim($_POST['kode_mapel'])));
        $this->db->bind('id_materi', htmlspecialchars(trim($_POST['id_materi'])));
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function save(): int
    {
        $query = "UPDATE {$this->tableName} SET nama_mapel = :nama_mapel, id_materi = :id_materi, kode_mapel = :kode_mapel WHERE id = :id";
        $this->db->prepare($query);
        $this->db->bind('id_materi', htmlspecialchars(trim($_POST['id_materi'])));
        $this->db->bind('kode_mapel', htmlspecialchars(trim($_POST['kode_mapel'])));
        $this->db->bind('nama_mapel', htmlspecialchars(trim($_POST['nama_mapel'])));
        $this->db->bind('id', htmlspecialchars(trim($_POST['id'])));
        $this->db->execute();
        return $this->db->rowCount();
    }
    
    /**
     * @return array
     */
    public function look(): array
    {
       return [];
    }
}