<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index()
{
    if(empty($this->session->userdata('id_user'))){
        // Jika id_user null, redirect ke halaman login
        redirect('user');
    }

    $username = $this->session->userdata('username');
    $dataUser['user'] = $this->Madmin->get_userByUsername($username);
    $dataUser['session_user'] = $this->session->userdata('username');
    $data['wishlist'] = $this->Madmin->get_wishlist($this->Madmin->get_by_username($username));
    $this->load->view('user/layout/sidebar', $dataUser);
    $this->load->view('user/layout/header');
    $this->load->view('user/form/wishlist/wishlist',$data);
    $this->load->view('user/layout/footer');
}

    public function add(){
        if(empty($this->session->userdata('username'))){
            	redirect('user');
	}
        $username = $this->session->userdata('username');
        $data['id_user'] = $this->Madmin->get_by_username($username);
        $data['destinasi']=$this->Madmin->get_all_data('destinasi')->result();
        // $data['wishlist'] = $this->Madmin->get_all_data('wishlist')->result();
        $dataUser['user'] = $this->Madmin->get_userByUsername($username);
        $dataUser['session_user'] = $this->session->userdata('username');
        $this->load->view('user/layout/sidebar', $dataUser);
		$this->load->view('user/layout/header');
		$this->load->view('user/form/wishlist/tambah',$data);
		$this->load->view('user/layout/footer');
    }
    public function save(){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $statuskunjungan = $this->input->post('statuskunjungan');
        $estimasi = $this->input->post('estimasi');
        $id_user = $this->input->post('id_user');
        $id_wisata = $this->input->post('id_wisata');

        $dataInput=array(
            'statuskunjungan'=>$statuskunjungan,
            'estimasi'=>$estimasi,
            'id_user'=>$id_user,
            'id_wisata'=>$id_wisata
        );
        $this->Madmin->insert('wishlist', $dataInput);
        redirect('wishlist');
    }
    public function get_by_id($id){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $username = $this->session->userdata('username');
        $dataUser['user'] = $this->Madmin->get_userByUsername($username);
        $dataUser['session_user'] = $this->session->userdata('username');
        $data['destinasi']=$this->Madmin->get_all_data('destinasi')->result();
        $dataWhere = $id;
        
        // $data['user']=$this->Madmin->get_by_id('user', $dataWhere)->row_object();
        $data['wishlist']=$this->Madmin->get_wishlist_by_id($dataWhere);
        $data['id_wishlist']=$id;
        // echo $data['wishlist'];
        // $data['wisata']=$this->Madmin->get_by_id('wisata', $dataWhere)->row_object();
        $this->load->view('user/layout/sidebar', $dataUser);
		$this->load->view('user/layout/header');
		$this->load->view('user/form/wishlist/edit', $data);
		$this->load->view('user/layout/footer');
    }
    public function editwishlist(){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $username = $this->session->userdata('username');
        $id_user = $this->Madmin->get_by_username($username);
        $id_wishlist = $this->input->post('id_wishlist');
        $statuskunjungan = $this->input->post('statuskunjungan');
        $estimasi = $this->input->post('estimasi');
        $id_wisata = $this->input->post('id_wisata');
        $dataInput=array(
            'statuskunjungan'=>$statuskunjungan,
            'estimasi'=>$estimasi,
            'id_user'=>$id_user,
            'id_wisata'=>$id_wisata
        );
        $this->Madmin->update_wishlist($id_wishlist, $dataInput);
        redirect('wishlist');
    }
    
    public function delete($id){
        if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
        $this->Madmin->delete('wishlist','id_wishlist', $id);
        redirect('wishlist');
        
    }
    // controllers/Wishlist.php

    public function add_to_wishlist(){
        if(empty($this->session->userdata('id_user'))){
            // Jika id_user null, redirect ke halaman login
            redirect('user');
        }
    
        $id_wisata = $this->input->post('id_wisata');
        $id_user = $this->session->userdata('id_user');
    
        $dataInput = array(
            'statuskunjungan' => 'Belum Dikunjungi',
            'estimasi' => '',
            'id_user' => $id_user,
            'id_wisata' => $id_wisata
        );
    
        $this->Madmin->insert('wishlist', $dataInput);
    
        redirect('katalog/detail/' . $id_wisata);
    }
    
    
    

}