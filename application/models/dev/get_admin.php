<?php
/**
 * PHP Get_admin
 *
 * LICENSE
 *
 * Atlet Nasional is released with licensing, using MIT license (license.txt).
 * You don't have to do anything special to choose one license or the other and you don't have to notify anyone which license you are using.
 * Please see the corresponding license file for details of these licenses.
 * You are free to use, modify and distribute this software, but all copyright information must remain.
 *
 * @package     Get_admin Model
 * @copyright   Copyright (c) 2016, Agung Sugiarto
 * @license		  MIT
 * @version     1.0.0
 * @author      Agung Sugiarto <sugiartoagung92@gmail.com>
 *
 */
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Class Get_admin
 */
class Get_admin extends CI_Model {
    //put your code here
    function __construct(){
        parent::__construct();
    }

    public function ceklogin($usermail, $userpass) {

        $this->db->where('usermail',$usermail);
        $this->db->where('userpass',$userpass);
        $query = $this->db->get('admin');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }
}
