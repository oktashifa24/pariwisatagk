<?php
defined('BASEPATH') or exit('No direct script acces allowed');

class Katalog extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Madmin');
    }

    public function index($page = 1)
    {
        $this->load->model('Madmin');

        // Load library pagination
        $this->load->library('pagination');

        // Jumlah item per halaman
        $limit = 9;

        // Menghitung offset
        $offset = ($page - 1) * $limit;

        // Mendapatkan total destinasi
        $total_destinasi = $this->Madmin->get_total_destinasi();


        // Mengonfigurasi pagination
        $config['base_url'] = site_url('katalog/index');
        $config['total_rows'] = $total_destinasi;
        $config['per_page'] = $limit;
        $config['uri_segment'] = 3;
        $config['use_page_numbers'] = TRUE;

        // Styling pagination
        $config['full_tag_open'] = '<nav><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';

        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';

        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><span class="page-link" style="background-color: grey; border-color: grey;">';
        $config['cur_tag_close'] = '<span class="sr-only" style="background-color: red">(current)</span></span></li>';

        $config['attributes'] = array("class"=>"page-link");

        $this->pagination->initialize($config);

        // Mendapatkan data destinasi yang dipaginasi dari model
        $data['destinasi'] = $this->Madmin->get_paginated_destinasi($limit, $offset);

        // Memuat data lainnya yang diperlukan (kategori, galeri, dll.)
        $data['kategori'] = $this->Madmin->get_all_data('kategori')->result();
        $data['galeri'] = $this->Madmin->get_all_data('galeri')->result();
        

        // Memuat tampilan
        $this->load->view('index/index', $data);
    }
    public function galeri(){
        $data['galeri'] = $this->Madmin->get_all_data('galeri')->result();

        // Memuat tampilan galeri
        $this->load->view('index/galeri', $data);
    }
    public function detail($id_wisata)
    {
        
        // Load data for the specific destination based on id_wisata
        $data['detail'] = $this->Madmin->get_detail_destinasi($id_wisata);
        $data['review'] = $this->Madmin->get_ulasan($id_wisata);
        // $data['ulasan'] = $this->Madmin->getUlasanId($id_wisata);

        // // Other data you may need
        // $data['kategori'] = $this->Madmin->get_all_data('kategori')->result();
        // $data['galeri'] = $this->Madmin->get_all_data('galeri')->result();
        // $data['fotodestinasi'] = $this->Madmin->get_all_data('fotodestinasi')->result();

        // Load the view for displaying destination details
        $this->load->view('index/detailDestinasi', $data);
    }


    

    public function wisata()
    {
        $data['kategori']=$this->Madmin->get_all_data('kategori')->result();
        $data['destinasi']=$this->Madmin->get_data();
        $data['galeri']=$this->Madmin->get_all_data('galeri')->result();
        $this->load->view('index/wisata',$data);
		
    }

    public function kategori($id)
    {
        $dataWhere = array('id_kategori' => $id);
        $data['destinasi'] = $this->Madmin->kategori('destinasi', $dataWhere)->row_object();
        $data['kategori']=$this->Madmin->get_all_data('kategori')->result();
        $data['galeri']=$this->Madmin->get_all_data('galeri')->result();
        $this->load->view('index/wisata',$data);
		
    }
}
    