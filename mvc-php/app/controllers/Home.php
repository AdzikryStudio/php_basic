<?php

class Home extends Controller {
    public function index() {
        $data['title'] = 'Home';
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('layout/header', $data);
        $this->view('home/index');
        $this->view('layout/footer');
    }
}