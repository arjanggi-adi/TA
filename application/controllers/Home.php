<?php
/**
 * PHP Home
 *
 * LICENSE
 *
 * Atlet Nasional is released with licensing, using MIT license (license.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package     Home Controller
 * @copyright   Copyright (c) 2016, Agung Sugiarto
 * @license		  MIT
 * @version     1.0.0
 * @author      Agung Sugiarto <sugiartoagung92@gmail.com>
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* class Home
*/
class Home extends CI_Controller {

	function __construct(){
        parent::__construct();
				$this->load->library('pagination');
        $this->load->model('home/home_model');
    }

    /**
     * [index description]
     * @return [type] [description]
     *
     */
	public function index() {

		$id = $this->input->get('id');
		$data['atlet'] = $this->home_model->get_related_atlet()->result();
		$data['detail_atlet'] = $this->home_model->get_atlet($id)->result();

		$data['atlet'] = $this->home_model->get_limit_atlet()->result();
		$data['cabor'] = $this->home_model->get_cabor()->result();
		$this->load->view('home/header');
		$this->load->view('home/home_view',$data);
		$this->load->view('home/footer');
	}

	public function profil() {

		//pagination settings
    $config['base_url'] = site_url('home/profil');
    $config['total_rows'] = $this->db->count_all('atlet');
    $config['per_page'] = "6";
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    //config for bootstrap pagination class integration
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = true;
    $config['last_link'] = true;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $data['page'] = $this->uri->segment(3);

    //call the model function to get the atlet data
		$data['atlet'] = $this->home_model->get_atlet_page($config["per_page"], $data['page'])->result();
		$data['cabor'] = $this->home_model->get_cabor()->result();

    $data['pagination'] = $this->pagination->create_links();

		$this->load->view('home/header');
		$this->load->view('profil/profil_view',$data);
		$this->load->view('home/footer');
	}

	public function atlet() {

		$id = $this->input->get('id');
		$data['atlet'] = $this->home_model->get_related_atlet()->result();
		$data['detail_atlet'] = $this->home_model->get_atlet($id)->result();
		$data['cabor'] = $this->home_model->get_cabor()->result();

		$this->load->view('home/header');
		$this->load->view('profil/atlet_view',$data);
		$this->load->view('home/footer');
	}

	public function gallery() {

		$data['atlet'] = $this->home_model->get_galery_atlet()->result();

		$this->load->view('home/header');
		$this->load->view('galery/galery_view',$data);
		$this->load->view('home/footer');
	}

	public function contact() {

		$this->load->view('home/header');
		$this->load->view('contact/contact_map_view');
		$this->load->view('home/footer');

	}

	public function cabor() {

		$id = $this->input->get('id');

		$data['cabor'] = $this->home_model->get_cabor()->result();
		$data['detail_cabor'] = $this->home_model->get_detail_cabor($id)->result();

		$this->load->view('home/header');
		$this->load->view('cabangolahraga/cabor_view',$data);
		$this->load->view('home/footer');
	}

	public function cabangolahraga() {

		//pagination settings
    $config['base_url'] = site_url('home/cabangolahraga');
    $config['total_rows'] = $this->db->count_all('cabor');
    $config['per_page'] = "8";
    $config["uri_segment"] = 3;
    $choice = $config["total_rows"] / $config["per_page"];
    $config["num_links"] = floor($choice);

    //config for bootstrap pagination class integration
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_link'] = true;
    $config['last_link'] = true;
    $config['first_tag_open'] = '<li>';
    $config['first_tag_close'] = '</li>';
    $config['prev_link'] = '&laquo';
    $config['prev_tag_open'] = '<li class="prev">';
    $config['prev_tag_close'] = '</li>';
    $config['next_link'] = '&raquo';
    $config['next_tag_open'] = '<li>';
    $config['next_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li>';
    $config['last_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="active"><a href="#">';
    $config['cur_tag_close'] = '</a></li>';
    $config['num_tag_open'] = '<li>';
    $config['num_tag_close'] = '</li>';

    $this->pagination->initialize($config);
    $data['page'] = $this->uri->segment(3);

    //call the model function to get the cabor data
		$data['cabor'] = $this->home_model->get_cabor_page($config["per_page"], $data['page'])->result();

    $data['pagination'] = $this->pagination->create_links();

		$this->load->view('home/header');
		$this->load->view('cabangolahraga/cabangolahraga_view',$data);
		$this->load->view('home/footer');

	}
}
