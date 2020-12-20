<?php

class Harian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Harian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mobil';
        $data['harian'] = $this->Harian_model->getAllHarian();
        if( $this->input->post('keyword') ) {
            $data['harian'] = $this->Harian_model->cariDataHarian();
        }
        $this->load->view('templates/header', $data);
        $this->load->view('harian/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data Mobil';

        $this->form_validation->set_rules('Mobil', 'Mobil', 'required');
        $this->form_validation->set_rules('Paket_10_Hari', 'Paket_1', 'required');
        $this->form_validation->set_rules('Paket_20_Hari', 'Paket_2', 'required');
        $this->form_validation->set_rules('Paket_30_Hari', 'Paket_3', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('harian/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Harian_model->tambahDataHarian();
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('harian');
        }
    }

    public function hapus($id)
    {
        $this->Harian_model->hapusDataHarian($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('harian');
    }

    public function detail($id)
    {
        $data['judul'] = 'Detail Data Mobil';
        $data['harian'] = $this->Harian_model->getHarianById($id);
        $this->load->view('templates/header', $data);
        $this->load->view('harian/detail', $data);
        $this->load->view('templates/footer');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data Mobil';
        $data['harian'] = $this->Harian_model->getHarianById($id);
       
        $this->form_validation->set_rules('Mobil', 'Mobil', 'required');
        $this->form_validation->set_rules('Paket_10_Hari', 'Paket_1', 'required');
        $this->form_validation->set_rules('Paket_20_Hari', 'Paket_2', 'required');
        $this->form_validation->set_rules('Paket_30_Hari', 'Paket_3', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('harian/ubah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Harian_model->ubahDataHarian();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('harian');
        }
    }

}
