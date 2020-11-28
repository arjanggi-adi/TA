<?php
/**
 * PHP Home_model
 *
 * LICENSE
 *
 * Atlet Nasional is released with licensing, using MIT license (license.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package     Home_model Model
 * @copyright   Copyright (c) 2016, Agung Sugiarto
 * @license		  MIT
 * @version     1.0.0
 * @author      Agung Sugiarto <sugiartoagung92@gmail.com>
 *
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* Home model to get data
*/
class Home_model extends CI_Model {

	function __construct(){
        parent::__construct();
    }

		function klik_detail($nama) {

			$this->db->where('atlet.nama',$nama);
			return $query = $this->db->get('atlet');
		}

		function get_limit_atlet() {

			return $query = $this->db->get('atlet',8);
		}

		function get_detail_cabor($id) {
			$this->db->where('cabor.id_cabor',$id);
			return $query = $this->db->get('cabor');

		}

		function get_cabor() {

			$query = $this->db->get('cabor',8);
			return $query;

		}

		function get_galery_atlet() {

			$query = $this->db->get('atlet');
			return $query;
		}

		function get_atlet_page($number, $offset) {

			return $query = $this->db->get('atlet',$number,$offset);

		}

    function get_cabor_page($number, $offset) {

			return $query = $this->db->get('cabor',$number,$offset);

    }

		function get_all() {

			$this->db->select('*');
			$this->db->from('atlet');
			$this->db->join('cabor', 'atlet.id_cabor = cabor.id_cabor');
			$this->db->join('prestasi', 'atlet.id_atlet = prestasi.id_atlet','left');
			$this->db->join('turnamen', 'prestasi.id_turnamen = turnamen.id_turnamen','left');

			return $query = $this->db->get();
		}

		function get_related_atlet() {

			$this->db->select('*');
			$this->db->limit(3);
			$this->db->from('atlet');
			$this->db->join('cabor', 'atlet.id_cabor = cabor.id_cabor');
			return $query =  $this->db->get();
		}

    function get_atlet($id) {

			$this->db->select('*');
			$this->db->from('atlet');
			$this->db->join('cabor', 'atlet.id_cabor = cabor.id_cabor');
			$this->db->join('prestasi', 'atlet.id_atlet = prestasi.id_atlet','left');
			$this->db->join('turnamen', 'prestasi.id_turnamen = turnamen.id_turnamen','left');
			$this->db->where('atlet.id_atlet',$id);
      return $this->db->get();

    }
}
