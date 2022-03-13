<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model {

    public function get_countries($en) {
        $prefix = 'en_';
        if ($en) $prefix = 'en_';
        $table = $prefix . 'countries';
        $this->db->select('id, name');
        $result = $this->db->get($table)->result_array();

        return $result;
    }

    public function get_countries_name() {
        $this->db->select('name');
        $result = $this->db->get('en_countries')->result_array();
        $return = array();
        foreach ($result as $row) {
            $return[] = $row['name'];
        }
        // print_r($return); exit();
        return $return;
    }

}