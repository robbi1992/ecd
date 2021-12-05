<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Passenger_model extends CI_Model {

    public function get_questions($en = false) {
        $prefix = 'in_';
        if ($en) $prefix = 'en_';
        $column = $prefix . 'content';

        $this->db->select('id, ' . $column . ' AS content');
        return $this->db->get('ecd_goods_declare')->result_array();
    }

    public function save_data($data) {
        // 'IS_' . time() . '_' . rand(1, 1000) . '.jpg';
        $return_status = NULL;
        $this->db->trans_start();

        // insert header first
        $value = $data['personal'];
        // set unique qr_code
        $qr_code = 'BCQR' . time() . '-' . rand(100, 999);
        $this->db->set('full_name', $value['name']);
        $this->db->set('date_of_birth', $value['birth']);
        $this->db->set('occupation', $value['occupation']);
        $this->db->set('nationality', $value['nationality']);
        $this->db->set('passport_number', $value['passport']);
        $this->db->set('address_in_indo', $value['address']);
        $this->db->set('flight_number', $value['flight']);
        $this->db->set('arrival_date', $value['arrival']);
        $this->db->set('baggage_in', $value['baggageIn']);
        $this->db->set('baggage_ex', $value['baggageEx']);
        $this->db->set('qr_code', $qr_code);
        // zone automaticly red if any goods  yes
        $zone = '0';
        if (count($data['answer']) > 0) {
            $zone = '1';
        }
        $this->db->set('zone', $zone);
        $this->db->insert('ecd_personal');
        $header_id = $this->db->insert_id();

        // insert family info if any
        $family = $data['family'];
        if (count($family) > 0) {
            $data_family = array();
            foreach($family as $val) {
                $data_family[] = array(
                    'personal_id' => $header_id,
                    'full_name' => $val['name'],
                    'passport_number' => $val['passport'],
                    'date_of_birth' => $val['birth']
                );
            }
            $this->db->insert_batch('ecd_personal_family', $data_family);
        }
        
        // set rate
        $rate = $data['rating'];
        $this->db->set('personal_id', $header_id);
        $this->db->set('rate', $rate);
        $this->db->insert('ecd_rates');

        // set declare answer insert batch
        $answer = $data['answer'];
        if (count($answer) > 0) {
            $data_answer = array();
            // value is enum 1 
            // set string '1' cus always be 1
            foreach($answer as $val) {
                $data_answer[] = array(
                    'personal_id' => $header_id,
                    'goods_declare_id' => $val['id'],
                    'answer' => '1'
                );
            }
            $this->db->insert_batch('ecd_declare_answer', $data_answer);
        }

        // set declare answer insert batch
        $goods = $data['goodsDetail'];
        if (count($goods) > 0) {
            $data_goods = array();
            foreach($goods as $val) {
                $data_goods[] = array(
                    'personal_id' => $header_id,
                    'description' => $val['desc'],
                    'quantity' => $val['amount'],
                    'value' => $val['value'],
                    'currency' => $val['currency']
                );
            }
            $this->db->insert_batch('ecd_goods', $data_goods);
        }
        
        $this->db->trans_complete();
        if ($this->db->trans_status() === FALSE)
		{
			$return_status = FALSE;
		} else {
            $return_status = $qr_code;   
        }

        return $return_status;
    }
}