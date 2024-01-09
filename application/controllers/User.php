<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index()
	{
		$this->load->view('user/login');
		$this->load->model('Madmin');
	}


	public function dashboard(){
		$this->load->model('Madmin');
	
		// Periksa apakah session 'username' sudah ada
		if(empty($this->session->userdata('username'))){
			redirect('user');
		}
	
		// Lanjutkan dengan logika dashboard seperti biasa
		$username = $this->session->userdata('username');
		$data['user'] = $this->Madmin->get_userByUsername($username);
		$data['session_user'] = $this->session->userdata('username');
    
		$this->load->view('user/layout/sidebar', $data);
		$this->load->view('user/layout/header');
		$this->load->view('user/dashboard', $data);
		$this->load->view('user/layout/footer');
	}
	
	public function login()
	{

		$this->load->model('Madmin');
		// }
		$data['user'] = $this->Madmin->get_by_id('user')->result();
		$this->load->view('user/login', $data);
	}
	public function aksi_login()
{
    $this->load->model('Madmin');

    $u = $this->input->post('username');
    $p = md5($this->input->post('password'));

    if (!empty($u) && !empty($p)) {
        $result = $this->Madmin->cek_login_user($u, $p);

        if ($result->num_rows() == 1) {
            $user_data = $result->row();
            
            // Simpan id_user ke dalam session
            $data_session = array(
                'id_user' => $user_data->id_user,
                'username' => $u,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);
            redirect('user/dashboard');
        } else {
            $data['error_message'] = 'Email atau Password anda salah!!!!';
            redirect('user');
        }
    } else {
        $data['error_message'] = 'Username atau Password tidak boleh kosong!!!!';
        redirect('user');
    }
}


	public function register()
	{
		$this->load->model('Madmin');

		$this->load->view('user/register');
	}

	public function register_aksi()
	{
		$this->load->model('Madmin');

		$username = $this->input->post('username');
		$email = $this->input->post('emailaktif');
		$password = md5($this->input->post('user_password'));
		$namalengkap = $this->input->post('user_namalengkap');

		$dataInput = array(
			'username' => $username,
			'emailaktif' => $email,
			'user_password' => $password,
			'user_namalengkap' => $namalengkap
		);

		$this->Madmin->insert('user', $dataInput);
		redirect('user');
	}
	public function editprof()
	{
		if (empty($this->session->userdata('username'))) {
			redirect('user');
		};
		$username = $this->session->userdata('username');
		$dataUser['user'] = $this->Madmin->get_userByUsername($username);
		$dataUser['session_user'] = $this->session->userdata('username');
		$username = $this->session->userdata('username');
		$id = $this->Madmin->get_by_username($username);
		$dataWhere = array('id_user' => $id);
		$data['user'] = $this->Madmin->get_by_id('user', $dataWhere)->row_object();
		$this->load->view('user/layout/sidebar', $dataUser);
		$this->load->view('user/layout/header');
		$this->load->view('user/form/profil/editprofil', $data);
		$this->load->view('user/layout/footer');
	}
	public function edit()
	{

		if (empty($this->session->userdata('username'))) {
			redirect('user');
		}
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$email = $this->input->post('emailaktif');
		$password = md5($this->input->post('admin_password'));
		$namalengkap = $this->input->post('admin_namalengkap');
		$alamat = $this->input->post('alamat');
		$notlp = $this->input->post('notlp');

		$dataUpdate = array(
			'username' => $username,
			'emailaktif' => $email,
			'user_password' => $password,
			'user_namalengkap' => $namalengkap,
			'alamat' => $alamat,
			'notlp' => $notlp
		);

		$this->Madmin->updateUser($id, $dataUpdate);
		redirect('user/dashboard');
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('user');
	}
}
