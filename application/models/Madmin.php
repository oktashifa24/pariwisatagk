<?php

class Madmin extends CI_Model{

	public function cek_login($u, $p){
		$q = $this->db->get_where('admin', array('username'=>$u, 'admin_password'=>$p));
		return $q;
	}
	public function cek_login_user($u, $p){
		$q = $this->db->get_where('user', array('username'=>$u, 'user_password'=>$p));
		return $q;
	}
	// public function cek_toko($p){
	// 	$q = $this->db->get_where('tbl_toko', ['namaToko'=>$p]);
	// 	return $q; 
	// }

	public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_username($username){
		$this->db->select('id_user');
		$query = $this->db->get_where("user", array('username' => $username));
	
		return $query->row()->id_user;

	}
	
	

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}
	function get_user($user)
	{
	  $this->db->where('id_user',$user);
	  $get_user = $this->db->get('user');
	  return $get_user->row();
	  } 
	function get_userByUsername($user)
	{
	  $this->db->where('username',$user);
	  $get_user = $this->db->get('user');
	  return $get_user->row();
	  } 

	public function delete($tabel, $id, $val){
		$this->db->delete($tabel, array($id => $val));
	}

	public function get_data(){
		$this->db->select('*');
		$this->db->from('destinasi');
		$queri = $this->db->get();
		return $queri->result();
	}

	public function kategori($id){
		$this->db->select('*');
		$this->db->from('destinasi');
		$this->db->where($id);
		return $this->db->get()->result();
	}

	public function get_detail_destinasi($id_wisata)
    {
        // Example query, modify it based on your database structure
		$this->db->select('*');
        $this->db->where('destinasi.id_wisata', $id_wisata);	
        return $this->db->get('destinasi')->row_object();
    }
	
	public function get_total_destinasi(){
		return $this->db->count_all('destinasi');
	}

	public function get_paginated_destinasi($limit, $offset){
		$this->db->select('*');
		$this->db->from('destinasi');
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		return $query->result();
	}
	

	public function get_total_galery(){
		return $this->db->count_all('galeri');
	}

	public function get_paginated_galery($limit, $offset){
		$this->db->select('*');
		$this->db->from('destinasi');
		$this->db->limit($limit, $offset);

		$query = $this->db->get();
		return $query->result();
	}

	public function get_wishlist($id_user) {
		$this->db->select('wishlist.*, destinasi.*');
		$this->db->from('wishlist');
		$this->db->join('destinasi', 'wishlist.id_wisata = destinasi.id_wisata');
		$this->db->where('wishlist.id_user', $id_user);
	
		return $this->db->get()->result();
	}
	public function get_wishlist_by_id($wishlist_id) {
		$this->db->select('*');
		$this->db->from('wishlist');
		$this->db->where('id_wishlist', $wishlist_id);
	
		return $this->db->get()->row();
	}
	public function update_wishlist($wishlist_id, $data) {
		$this->db->where('id_wishlist', $wishlist_id);
		$this->db->update('wishlist', $data);
	}
	public function getUlasanByIdUser($id_user) {
        // Ambil data ulasan dan join dengan data dari tabel wisata
        $this->db->select('*');
        $this->db->from('ulasan');
        $this->db->join('destinasi', 'ulasan.id_wisata = destinasi.id_wisata');
        $this->db->where('ulasan.id_user', $id_user);

        $query = $this->db->get();

        // Return hasil query
        return $query->result();
    }
	public function getUlasanById($id_ulasan) {
        // Ambil data ulasan dan join dengan data dari tabel destinasi
        $this->db->select('*');
        $this->db->from('ulasan');
        $this->db->join('destinasi', 'ulasan.id_wisata = destinasi.id_wisata'); // Sesuaikan dengan nama tabel dan kolom yang sesuai
        $this->db->where('ulasan.id_ulasan', $id_ulasan);

        $query = $this->db->get();

        // Return hasil query
        return $query->row(); // Menggunakan row() karena mengambil satu baris data berdasarkan id_ulasan
    }

	public function updateUlasan($id_ulasan, $data) {
        // Update data ulasan berdasarkan id_ulasan
        $this->db->where('id_ulasan', $id_ulasan);
        $this->db->update('ulasan', $data);

        // Return status update (berhasil atau tidak)
        return $this->db->affected_rows() > 0;
    }

	public function updateUser($idUser, $data) {
        // Update data ulasan berdasarkan id_ulasan
        $this->db->where('id_user', $idUser);
        $this->db->update('user', $data);

        // Return status update (berhasil atau tidak)
        return $this->db->affected_rows() > 0;
    }

	public function get_ulasan_by_id_wisata($id_wisata) {
		$this->db->where('id_wisata', $id_wisata);
		$result = $this->db->get('ulasan')->result();
		echo '<pre>';
		var_dump($result);
		echo '</pre>';
		return $result;
	}
	
	public function get_ulasan($id_wisata)
    {

			// Ambil data ulasan dan join dengan data dari tabel wisata
			$this->db->select('*');
			$this->db->from('ulasan');
			$this->db->join('destinasi', 'ulasan.id_wisata = destinasi.id_wisata');
			$this->db->join('user', 'user.id_user = ulasan.id_user');
			$this->db->where('ulasan.id_wisata', $id_wisata);
	
			$query = $this->db->get();
	
			// Return hasil query
			return $query->result();
		}

		public function count_kategori() {
			return $this->db->count_all('kategori');
		}
		public function count_wisata() {
			return $this->db->count_all('destinasi');
		}
		public function count_galeri() {
			return $this->db->count_all('galeri');
		}
		public function count_user() {
			return $this->db->count_all('user');
		}
}
?>