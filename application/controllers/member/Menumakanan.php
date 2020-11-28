<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dashboard
*/
class Menumakanan extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->library('pagination');
        $this->load->model('member/atlet_model');

        if(!$this->session->userdata('logged_in')) {
            redirect('member/access');
        }
    }

	public function index() {
        $email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $d['atlet'] = $atlet['nama'];
		$this->load->view('member/menumakanan_view', $d);
	}

    public function daftarmenu(){
        //call the model function to get the makanan data
        $makanan = $this->atlet_model->get_makanan()->result();

        $email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $id_atlet = $atlet['id_atlet'];

        $makanatlet = $this->db->query("SELECT a.id_makanan FROM makanan a INNER JOIN menu_makanan_atlet b ON a.id_makanan=b.id_makanan WHERE b.id_atlet=".$id_atlet."")->result_array();

        $data= array();
        foreach ($makanan as $no => $m) {
            $id = $m->id_makanan;
            $href = '<button class="btn btn-success" onclick="return tambahmakan('.$id.')">Tambah ke daftar makan</button>';
            foreach ($makanatlet as $ma) {
                if ($ma['id_makanan']==$id) {
                    $href = '<button class="btn btn-warning" onclick="return hapusmakan('.$id.')">Hapus Dari daftar makan</button>';
                }
            }
            $data[$no]['id'] = $id;
            $data[$no]['nama'] = $m->nama;
            $data[$no]['protein'] = $m->protein;
            $data[$no]['lemak'] = $m->lemak;
            $data[$no]['karbohidrat'] = $m->karbohidrat;
            $data[$no]['sodium'] = $m->sodium;
            $data[$no]['pufa'] = $m->pufa;
            $data[$no]['kolestrol'] = $m->kolestrol;
            $data[$no]['link'] = $href;
        }
        if (empty($data)) {
            $d['q_stat'] = "kosong";
        } else{
            $d['q_stat'] = "ada";
        }
        $d['status'] = "ok";
        $d['data'] = $data;
        $d['id'] = $makanatlet;

        header('Content-Type: application/json');
        echo json_encode($d);
    }

    public function aksi($id, $aksi){
        $email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $id_atlet = $atlet['id_atlet'];

        $data['id_atlet'] = $id_atlet;
        $data['id_makanan'] = $id;

        if ($aksi == "add") {
            $this->db->insert('menu_makanan_atlet', $data);
            $d['status'] = "ok";
            $d['data'] = "Data berhasil disimpan.";
        } elseif ($aksi == "dell") {
            $this->db->query("DELETE FROM menu_makanan_atlet WHERE id_atlet=".$id_atlet." AND id_makanan=".$id."");
            $d['status'] = "ok";
            $d['data'] = "Data berhasil dihapus.";
        }else{
            $d['status'] = "ok";
            $d['data'] = "Kesalahan sistem"; 
        }        

        header('Content-Type: application/json');
        echo json_encode($d);
    }

    public function atletmakan(){
        $email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $d['atlet'] = $atlet['nama'];
        $this->load->view('member/daftarmakan_view', $d);
    }

    public function daftarmakan(){
        $email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $id_atlet = $atlet['id_atlet'];

        $makanan = $this->db->query("SELECT * FROM makanan a INNER JOIN menu_makanan_atlet b ON a.id_makanan=b.id_makanan WHERE b.id_atlet=".$id_atlet."")->result_array();

        if (empty($makanan)) {
            $d['q_stat'] = "kosong";
        } else{
            $d['q_stat'] = "ada";
        }

        $d['status'] = "ok";
        $d['data'] = $makanan;

        header('Content-Type: application/json');
        echo json_encode($d);        
    }
}