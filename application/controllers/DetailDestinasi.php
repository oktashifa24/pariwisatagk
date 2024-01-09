<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailDestinasi extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Madmin');
        $this->load->helper('form');
    }
//     <?php
// defined('BASEPATH') OR exit('No direct script access allowed');

// //use Nette\Database\Connection;

// class Detail extends CI_Controller {

    public function main($id_wisata) {
        // Load necessary libraries/helpers
        // $this->load->database();
        // require_once('vendor/autoload.php'); // Load autoloader if necessary
        // require_once('Cbrs.php'); // Include Cbrs class

        // // Database initialization
        // $dsn = 'mysql:host=localhost;dbname=pariwisata';
        // $user = 'root';
        // $password = '';
        // $database = new Connection($dsn, $user, $password);

        // Get ID from the URL
        //$id = $this->input->get('id');

        // Get destination details
        $destinasi = $this->get_destinasi_detail($id_wisata);

        // Query for data
        $result = $this->db->query('SELECT id_wisata, namawisata, deskripsi, lokasi FROM destinasi');
        $data = [];
        foreach ($result->result() as $row) {
            $data[$row->id_wisata] = $this->pre_process($row->deskripsi . ' ' . $row->lokasi);
        }

        // Cbrs initialization
        $cbrs = new cbrs();
        $cbrs->createIndex($data);
        $cbrs->idf();
        $w = $cbrs->weight();
        $r = $cbrs->similarity($id_wisata);
        $n = 8;

        // Load view with data
        // $data['ulasan'] = $this->Madmin->get_ulasan_by_id_wisata($id);
          $data['detail'] = $this->Madmin->get_detail_destinasi($id_wisata);
   $data['review'] = $this->Madmin->get_ulasan($id_wisata);
        $data['destinasi']=$destinasi;
        $data['r']=$r;
        $data['n']=$n;
        $this->load->view('index/detailDestinasi', $data);
    }

    // Other helper functions
    private function pre_process($str) {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer = $stemmerFactory->createStemmer();
    
        $stopWordRemoverFactory = new \Sastrawi\StopWordRemover\StopWordRemoverFactory();
        $stopword = $stopWordRemoverFactory->createStopWordRemover();
    
        $str = strtolower($str);
        $str = $stemmer->stem($str);
        $str = $stopword->remove($str);
    
        return $str;
    }

    private function get_destinasi_detail($id) {
        $rs = $this->db->query('SELECT * FROM destinasi Where id_wisata = '.$id)->result();
        return $rs;
    }

        public function add_review() {
        if(empty($this->session->userdata('id_user'))){
            // Jika id_user null, redirect ke halaman login
            redirect('user');
        }

        $id_user = $this->session->userdata('id_user');
        $id_wisata = $this->input->post('id_wisata');
        $pesan = $this->input->post('pesan');

        // Handle file upload
        $config['upload_path'] = './assets/uploaded/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 1024; // in KB

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('fotoulasan')) {
            $upload_data = $this->upload->data();
            $fotoulasan = $upload_data['file_name'];
        } else {
            $fotoulasan = null; // Foto tidak diupload atau gagal diupload
        }

        // Data untuk dimasukkan ke dalam tabel ulasan
        $data = array(
            'pesan' => $pesan,
            'fotoulasan' => $fotoulasan,
            'id_user' => $id_user,
            'id_wisata' => $id_wisata
        );

        // Masukkan data ke dalam tabel ulasan
        $this->Madmin->insert('ulasan', $data);

        // Redirect kembali ke halaman detail destinasi atau halaman lain yang diinginkan
        redirect('katalog/detail/' . $id_wisata);
    }
}


//     public function index($id_wisata)
//     {
//         // Dapatkan informasi destinasi berdasarkan $id_wisata
//         $data['detail'] = $this->Madmin->get_detail_destinasi($id_wisata);
//         $data['review'] = $this->Madmin->get_ulasan($id_wisata);

//         // ... (tambahkan informasi destinasi yang lain sesuai kebutuhan) ...

//         // Tampilkan halaman detail destinasi
//         $this->load->view('index/detailDestinasi', $data);
//     }

//     public function add_review() {
//         if(empty($this->session->userdata('id_user'))){
//             // Jika id_user null, redirect ke halaman login
//             redirect('user');
//         }

//         $id_user = $this->session->userdata('id_user');
//         $id_wisata = $this->input->post('id_wisata');
//         $pesan = $this->input->post('pesan');

//         // Handle file upload
//         $config['upload_path'] = './assets/uploaded/';
//         $config['allowed_types'] = 'gif|jpg|png';
//         $config['max_size'] = 1024; // in KB

//         $this->load->library('upload', $config);

//         if ($this->upload->do_upload('fotoulasan')) {
//             $upload_data = $this->upload->data();
//             $fotoulasan = $upload_data['file_name'];
//         } else {
//             $fotoulasan = null; // Foto tidak diupload atau gagal diupload
//         }

//         // Data untuk dimasukkan ke dalam tabel ulasan
//         $data = array(
//             'pesan' => $pesan,
//             'fotoulasan' => $fotoulasan,
//             'id_user' => $id_user,
//             'id_wisata' => $id_wisata
//         );

//         // Masukkan data ke dalam tabel ulasan
//         $this->Madmin->insert('ulasan', $data);

//         // Redirect kembali ke halaman detail destinasi atau halaman lain yang diinginkan
//         redirect('katalog/detail/' . $id_wisata);
//     }
//     public function detail($id_wisata) {
//         // Mengambil data destinasi
//         $data['detail'] = $this->Madmin->get_detail_destinasi($id_wisata);
    
//         // Mengambil data ulasan berdasarkan id_wisata
//         $data['ulasan'] = $this->Madmin->get_ulasan_by_id_wisata($id_wisata);
    
//         // Menampilkan view detail destinasi beserta ulasannya
//         $this->load->view('index/detailDestinasi', $data);
//     }
    
// }
