<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ulasan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
    }

	public function index()
	{
     if(empty($this->session->userdata('username'))){
	redirect('user');
      }
        $username = $this->session->userdata('username');
        $dataUser['user'] = $this->Madmin->get_userByUsername($username);
        $dataUser['session_user'] = $this->session->userdata('username');
        $data['user'] = $username;
        $data['ulasan'] = $this->Madmin->getUlasanByIdUser($this->Madmin->get_by_username($username));
		$this->load->view('user/layout/sidebar', $dataUser);
		$this->load->view('user/layout/header');
		$this->load->view('user/form/ulasan/ulasan',$data);
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
		$this->load->view('user/form/ulasan/tambah',$data);
		$this->load->view('user/layout/footer');
    }
    public function save(){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $pesan = $this->input->post('pesan');
        $id_user = $this->input->post('id_user');
        $id_wisata = $this->input->post('id_wisata');
        $foto = $_FILES['foto'];
        if ($foto=''){}else{
            $config["upload_path"] = "./assets/uploaded";
            $config["allowed_types"] = "jpg|png|jpeg|tiff";
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }else{
                $foto= $this->upload->data('file_name');
            }
        };

        $dataInput=array(
            'pesan'=>$pesan,
            'fotoulasan'=>$foto,
            'id_user'=>$id_user,
            'id_wisata'=>$id_wisata
        );
        $this->Madmin->insert('ulasan', $dataInput);
        redirect('ulasan');
    }
    public function edit($id){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $username = $this->session->userdata('username');
        $dataUser['user'] = $this->Madmin->get_userByUsername($username);
        $dataUser['session_user'] = $this->session->userdata('username');
        $data['id_user']= $this->Madmin->get_by_username($username);
        $data['destinasi']=$this->Madmin->get_all_data('destinasi')->result();
        $data['ulasan']=$this->Madmin->getUlasanById($id);
        

        // $data['wishlist']=$this->Madmin->get_wishlist_by_id($dataWhere);
        $data['id_ulasan']=$id;
        $this->load->view('user/layout/sidebar', $dataUser);
		$this->load->view('user/layout/header');
		$this->load->view('user/form/ulasan/edit', $data);
		$this->load->view('user/layout/footer');
    }
    public function editulasan(){
        if(empty($this->session->userdata('username'))){
			redirect('user');
		}
        $id_ulasan = $this->input->post('id_ulasan');
        $pesan = $this->input->post('pesan');
        $id_user = $this->input->post('id_user');
        $id_wisata = $this->input->post('id_wisata');
        $foto = $_FILES['foto'];
        if ($foto=''){}else{
            $config["upload_path"] = "./assets/uploaded";
            $config["allowed_types"] = "jpg|png";
            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('foto')){
                echo "Upload Gagal"; die();
            }else{
                $foto= $this->upload->data('file_name');
            }
        };
        $dataInput=array(
            'pesan'=>$pesan,
            'fotoulasan'=>$foto,
            'id_user'=>$id_user,
            'id_wisata'=>$id_wisata
        );
        $this->Madmin->updateUlasan($id_ulasan, $dataInput);
        redirect('ulasan');
    }
    
    public function delete($id){
        if(empty($this->session->userdata('username'))){
			redirect('admin');
		}
        $this->Madmin->delete('ulasan','id_ulasan', $id);
        redirect('ulasan');
        
    }
}