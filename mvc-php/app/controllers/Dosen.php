<?php

class Dosen  extends Controller {
    public function index() {
        $data['title'] = 'Dosen';
        $data['dsn'] = $this->model('Dosen_model')->getAllDosen();
        $this->view("layout/header", $data);
        $this->view("dosen/index", $data);
        $this->view("layout/footer");
    }

    public function detail($id) {
        $data['title'] = ' Detail Dosen';
        $data['dsn'] = $this->model('Dosen_model')->getDosenById($id);
        $this->view("layout/header", $data);
        $this->view("dosen/detail", $data);
        $this->view("layout/footer");
    }

    public function tambah() {
        if ($this->model('Dosen_model')->tambahDataDosen($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'ditambahkan', 'danger');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        }
    }
    public function hapus($id) {
        if ($this->model('Dosen_model')->hapusDataDosen($id) > 0) {
            Flasher::setFlash('Berhasil', 'dihapus', 'success');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'dihapus', 'danger');
            header('Location: ' . BASEURL . '/dosen');
            exit;
        }
    }
    public function cari(){
        $data['title'] = 'Dosen';
        $data['dsn'] = $this->model('Dosen_model')->cariDataDosen();
        $this->view("layout/header", $data);
        $this->view("dosen/index", $data);
        $this->view("layout/footer");
    }
}