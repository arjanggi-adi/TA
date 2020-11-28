<?php

/**
 * PHP Crud
 *
 * LICENSE
 *
 * Atlet Nasional is released with licensing, using MIT license (license.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package     Crud Controller
 * @copyright   Copyright (c) 2016, Agung Sugiarto
 * @license		  MIT
 * @version     1.0.0
 * @author      Agung Sugiarto <sugiartoagung92@gmail.com>
 *
 */
if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Crud atlet
 */
class Crud extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		// load library grocery_crud
		$this->load->library('grocery_CRUD');
	}
	/**
	 * [view_crud fungsi view]
	 * @param  [type] $output [default view @output = null]
	 * @return [type]         [$output]
	 */
	public function view_crud($output = NULL)
	{

		$this->load->view('dev/dashboard_view', $output);
	}

	public function index()
	{
		/**
		 * Cek jika session ogin
		 */
		if ($this->session->userdata('logged_in')) {

			$this->view_crud((object)array('output' => '', 'js_files' => array(), 'css_files' => array()));
			/**
			 * Jika session tidak login
			 */
		} else {
			redirect('dev/access');
		}
	}

	/**
	 * [atlet description]
	 * @return [type] [description]
	 */
	public function atlet()
	{
		/**
		 * Cek jika session login
		 */
		if ($this->session->userdata('logged_in')) {
			/**
			 * [$crud description]
			 * @var grocery_CRUD
			 */
			$crud = new grocery_CRUD();
			$crud->set_table('atlet');
			$crud->set_relation('id_cabor', 'cabor', 'nama_cabor');
			$crud->display_as('id_cabor', 'Nama Cabor');
			$crud->set_field_upload('foto', 'assets/uploads/files/atlet');

			$crud->callback_before_insert(array($this, 'encrypt'));
			$crud->callback_before_update(array($this, 'encrypt'));

			$output = $crud->render();
			$this->view_crud($output);
			/**
			 * Jika session tidak login
			 */
		} else {

			redirect('dev/access');
		}
	}

	function encrypt($post)
	{
		$post['password'] = md5($post['password']);
		return $post;
	}

	public function prestasi()
	{
		/**
		 * Cek jika session ogin
		 */
		if ($this->session->userdata('logged_in')) {

			$crud = new grocery_CRUD();
			$crud->set_table('prestasi');
			$crud->set_relation('id_atlet', 'atlet', 'nama');
			$crud->display_as('id_atlet', 'Nama Atlet');
			$crud->set_relation('id_turnamen', 'turnamen', 'nama_turnamen');
			$crud->display_as('id_turnamen', 'Nama Turnamen');

			$output = $crud->render();
			$this->view_crud($output);
			/**
			 * Jika session tidak login
			 */
		} else {
			redirect('dev/access');
		}
	}

	public function cabor()
	{
		/**
		 * Cek jika session login
		 */
		if ($this->session->userdata('logged_in')) {

			$crud = new grocery_CRUD();
			$crud->set_table('cabor');
			$crud->set_field_upload('image', 'assets/uploads/files/cabor');

			$output = $crud->render();
			$this->view_crud($output);
		} else {
			redirect('dev/access');
		}
	}

	public function turnamen()
	{
		/**
		 * Cek jika session ogin
		 */
		if ($this->session->userdata('logged_in')) {

			$crud = new grocery_CRUD();
			$crud->set_table('turnamen');

			$output = $crud->render();
			$this->view_crud($output);
			/**
			 * Jika session tidak login
			 */
		} else {
			redirect('dev/access');
		}
	}

	public function makanan()
	{
		/**
		 * Cek jika session ogin
		 */
		if ($this->session->userdata('logged_in')) {

			$crud = new grocery_CRUD();
			$crud->set_table('makanan');

			$output = $crud->render();
			$this->view_crud($output);
			/**
			 * Jika session tidak login
			 */
		} else {
			redirect('dev/access');
		}
	}
}
