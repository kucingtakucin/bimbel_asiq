<?php
use Arthur\Core\App\Model;

class GuruModel extends Model {

    /**
     * @inheritDoc
     * @return int
     */
    public function add(): int
    {
       return 0;
    }

    /**
     * @inheritDoc
     * @return int
     */
    public function save(): int
    {
        return 0;
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
       return [];
    }
}