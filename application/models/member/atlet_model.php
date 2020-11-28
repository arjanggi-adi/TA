<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Atlet_model extends CI_Model
{

    function __construct()
    {
        parent::__construct();
    }

    function des_atlet()
    {

        $this->db->select('atlet');
        $this->db->from('atlet');
        // $this->db->join('cabor', 'atlet.id_cabor = cabor.id_cabor');

        $query = $this->db->get()->result_object();
    }

    public function login($email, $password)
    {

        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('atlet');

        if ($query->num_rows() > 0) {
            return $query->result_array();
        }
    }

    public function register()
    {
        $notif = array();
        $data = array(
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('email'),
            'password' => md5($this->input->post('password'))
        );

        $this->db->insert('atlet', $data);

        $users_id = $this->db->insert_id();
        if ($this->db->affected_rows() > 0) {
            $notif['message'] = 'Saved successfully';
            $notif['type'] = 'success';
            unset($_POST);
        } else {
            $notif['message'] = 'Something wrong !';
            $notif['type'] = 'danger';
        }
        return $notif;
    }

    function get_makanan() {

            return $query = $this->db->get('makanan');

        }
    function get_makanan_page($number, $offset) {

            return $query = $this->db->get('makanan',$number,$offset);

    }
}
