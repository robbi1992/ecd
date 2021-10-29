<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model {

    public function get_countries() {
        return $this->db->get('countries')->result_array();
    }
}