<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//use Nette\Database\Connection;

class Detail extends CI_Controller {

    public function main($id) {
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
        $destinasi = $this->get_destinasi_detail($id);

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
        $r = $cbrs->similarity($id);
        $n = 8;

        // Load view with data
        $data['destinasi']=$destinasi;
        $data['r']=$r;
        $data['n']=$n;
        $this->load->view('index/detail', $data);
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
}
