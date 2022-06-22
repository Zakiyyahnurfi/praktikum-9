<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Dosen extends CI_Controller {
    public function index()
    {
        $this->load->model ('Dosen_model','dsn1');
        $this->dsn1->id=1;
        $this->dsn1->nidn='01410';
        $this->dsn1->nama='Putri Handayani';
        $this->dsn1->gender='P';
        $this->dsn1->pendidikan ='S1 Manajemen';

        $this->load->model ('Dosen_model','dsn2');
        $this->dsn2->id=2;
        $this->dsn2->nidn='01411';
        $this->dsn2->nama='Anugerah Eka';
        $this->dsn2->gender='L';
        $this->dsn2->pendidikan ='S2 Sastra Inggris';

        $this->load->model ('Dosen_model','dsn3');
        $this->dsn3->id=3;
        $this->dsn3->nidn='01412';
        $this->dsn3->nama='Dirga Sulaiman';
        $this->dsn3->gender='L';
        $this->dsn3->pendidikan ='S2 Teknik Informatika';

        $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];
        $data['list_dsn']=$list_dsn;
        // $this->load->view('header');
        //$this->load->view('dosen/index',$data);
        // $this->load->view('footer');
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        $this->load->view('dosen/index', $data);
        $this->load->view('Layout/footer');
    }

    public function create(){
        $data["judul"] = "Form Kelola Dosen";
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        $this->load->view('dosen/create', $data);
        $this->load->view('Layout/footer');
    }

    public function save(){
        $this->load->model ('Dosen_model','dsn');

        $this->dsn->nidn = $this->input->post('nidn');
        $this->dsn->nama = $this->input->post('nama');
        $this->dsn->gender = $this->input->post('gender');
        $this->dsn->tmp_lahir= $this->input->post('tmp_lahir');
        $this->dsn->tgl_lahir = $this->input->post('tgl_lahir');
        $this->dsn->pendidikan = $this->input->post('pendidikan');

        $data['dsn'] = $this->dsn;
        $this->load->view('Layout/header');
        $this->load->view('Layout/sidebar');
        $this->load->view('dosen/view', $data);
        $this->load->view('Layout/footer');
    }
}

?>