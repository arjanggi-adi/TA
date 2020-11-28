<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Dashboard
*/
class Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        
        if(!$this->session->userdata('logged_in')) {
            redirect('member/access');
        }
    }

	public function index() {

		$email = $this->session->userdata('email');
        $atlet = $this->db->get_where('atlet', ['email'=>$email])->row_array();
        $d['atlet'] = $atlet['nama'];

		$this->load->view('member/dashboard_view', $d);
	}
}