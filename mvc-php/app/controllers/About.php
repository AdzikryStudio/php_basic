<?php

class About extends Controller {
    public function index($nama='ss', $pekerjaan='aaa' , $umur=20){
        $data['title'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $this->view('layout/header', $data);
        $this->view('about/index', $data); 
        $this->view('layout/footer');
       }
    public function page() {
    $data['title'] = 'Pages';
    $this->view('layout/header', $data);
        $this->view('about/page');
        $this->view('layout/footer');
    }
}
    