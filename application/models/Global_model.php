<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Global_model extends CI_Model {

    public function get_countries($en) {
        $prefix = '';
        if ($en) $prefix = 'en_';
        $field = $prefix . 'name';
        $this->db->select('id, ' . $field);
        $result = $this->db->get('countries')->result_array();

        foreach ($result as $val) {
            $countries[] = array(
                'id' => $val['id'],
                'name' => $val[$field]
            );
        }

        return $countries;
    }
}