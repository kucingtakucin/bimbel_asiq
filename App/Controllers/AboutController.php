<?php
use Core\App\Controller;

class AboutController extends Controller {

    /**
     * @inheritDoc
     * @return void
     */
    public function index(): void {
        // TODO: Implement index() method.
        $data = [
            'title' => 'About Page'
        ];
        $this->view('index', $data);
    }
}