<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Class login
*/
class Access extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('member/atlet_model');

	}

	public function index() {

		if(!$this->session->userdata('logged_in')) {
            $this->load->view('home/header');
	        $this->load->view('member/login_view');
	        $this->load->view('home/footer');
        } else{
        	redirect('member/access');
        }
		
	}

	public function login() {
		
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));

		$this->load->helper('security');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'required|xss_clean');
		
		if($this->form_validation->run() == FALSE) {
			
			$this->load->view('home/header');
			$this->load->view('member/login_view');
			$this->load->view('home/footer');

		} else {
			$res = $this->atlet_model->login($email,$password);
			if($res){
                foreach ($res as $datalogin) {
                    $email = $datalogin['email'];
                    $password = $datalogin['password'];
                }
                $data = array(
                    'email'  => $email,
                    'password'  => $password,
                    'logged_in' => TRUE
                );

                $this->session->set_userdata($data);
                redirect('member/dashboard');
                return true;

            }else{
                // jika tidak valid redirect ke login
                $this->session->set_flashdata(
                	'msg', '<div class="alert alert-danger text-center"><button class="close" data-dismiss="alert" type="button">×</button>Email atau Password salah!</div>'
                );
            	redirect('member/access');
            }
		}
	}

	public function register() {
		//set validation rules
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[atlet.email]',array('is_unique' => 'Email ini sudah digunakan. Silahkan register dengan email yang lain.'));
		 // <a href="forgot-pass" class="btn btn-xs btn-primary">have you forgot your password</a> ?'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|matches[password]|md5');
		
		//validate form input
		if ($this->form_validation->run() == FALSE) {
			// fails
			$this->load->view('home/header');
			$this->load->view('member/register_view');
			$this->load->view('home/footer');
        } else {
			//insert the user registration details into database
			$data = array(
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => md5($this->input->post('password'))
			);
			
			$this->atlet_model->register();
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Silahkan login</div>');
			redirect('member/access');
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		$this->session->set_userdata('logged_in', FALSE);
		redirect('home');
	}
}