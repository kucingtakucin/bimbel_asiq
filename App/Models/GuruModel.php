<?php
use Arthur\Core\App\Model;

class GuruModel extends Model {

    /**
     * @inheritDoc
     * @return int
     */
    public function add(): int
    {
        $query = "INSERT INTO {$this->tableName} (id, nama) VALUES (:id, :nama)";
        $this->db->prepare($query);
        $this->db->bind('id', htmlspecialchars(trim($_POST['id'])));
        $this->db->bind('nama', htmlspecialchars(trim($_POST['nama'])));
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function save(): int
    {
        $query = "UPDATE {$this->tableName} SET nama = :nama WHERE id = :id";
        $this->db->prepare($query);
        $this->db->bind('id', htmlspecialchars(trim($_POST['id'])));
        $this->db->bind('nama', htmlspecialchars(trim($_POST['nama'])));
        $this->db->execute();
        return $this->db->rowCount();
    }

    /**
     * @return string
     */
    public function upload_image(): string
    {
        return '';
    }

    /**
     * @return array
     */
    public function look(): array
    {
        $query = "SELECT * FROM {$this->tableName} WHERE nama LIKE :keyword OR id LIKE :keyword;
        $keyword = $this->db->quote(htmlspecialchars(trim($_POST['keyword'])));
        $this->db->prepare($query);
        $this->db->bind('keyword', "%$keyword%");
        $this->db->execute();
        return $this->db->fetchAll();
    }
}