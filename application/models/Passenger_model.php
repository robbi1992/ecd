<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Passenger_model extends CI_Model {

    public function get_questions($en = false) {
        $prefix = 'in_';
        if ($en) $prefix = 'en_';
        $column = $prefix . 'content';

        $this->db->select('id, ' . $column . ' AS content');
        return $this->db->get('ecd_goods_declare')->result_array();
    }
}