<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recomen extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Mreq');
    }

    public function index() {
        $keywords = "Rekomendasi WIsata";
        $data['results'] = $this->Mreq->search($keywords);

        $this->load->view('index/rekomendasi', $data);
    }
}