<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    private function get_language($en = false) {
        $data = array (
            'text' => '<p>Barang impor yang dibawa oleh penumpang atau Awak Sarana Pengangkut wajib diberitahukan kepada Pejabat Bea dan Cukai
            menggunakan Customs Declaration</p><p style="margin-top:-15px;"><b>PMK 203/PMK.04/2017</b></p>',
            'button' => 'MULAI',
            'header' => 'Selamat Datang',
            'active' => 0
        );

        if ($en) {
            $data = array (
                'text' => '<p>Imported goods carried by Passengers or Crews must be notified to Customs Officer by Customs Declaration</p> <p style="margin-top:-15px;"><b>PMK 203/PMK.04/2017</b></p>',
                'button' => 'START',
                'header' => 'Welcome',
                'active' => 1
            );
        }
        return $data;
    }
	public function index()
	{   
        $en = false;
        if (isset($_GET['lang']))  $en = true;
        $data['home'] = $this->get_language($en);
        
		$this->load->view('home', $data);
	}
}
