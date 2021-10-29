<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passengers extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
	}

    private function get_language($en = false) {
        $data = array (
            'text1' => 'Terima kasih atas kerjasama Anda dalam pemeriksaan pabean untuk mengidentifikasi adanya narkotika, obat-obatan terlarang, barang terkait terorisme, uang dan/atau instrument pembayaran lainnya yang terkait dengan pencucian uang, dan/atau penyelundupan barang yang melanggar peraturan perundang-undangan Negara Indonesia',
            'text2' => 'Membawa barang-barang tersebut yang tidak sesuai dengan ketentuan dan/ atau melakukan penyelundupan, merupakan pelanggaran dan dikenakan sanksi.',
            'button' => 'Selanjutnya',
            'passenger' => array(
                'header' => 'Data Penumpang'
            )
        );

        if ($en) {
            $data = array (
                'text1' => 'Directorate General of Customs and Excise would like to thank you for your kind cooperation during the inspection to identify narcotics, illegal drugs, any articles which are related to terrorism activities, currency, and/or bearer negotiable instruments which are related to money laundering, and/or smuggling activities, that violate state laws and regulation of Indonesia.',
                'text2' => 'Illicitly bringing those goods into Indonesia and doing smuggling activities, are considered violations and will lead to legal action.',
                'button' => 'Next',
                'passenger' => array(
                    'header' => 'Passenger'
                )
            );
        }
        return $data;
    }

    public function index()
	{   
        $data = array();
        $en = false;
        if (isset($_GET['lang']))  $en = true;
        $data['desc'] = $this->get_language($en);
        $data['country'] = $this->global_model->get_countries();
        
		$this->load->view('passengers', $data);
	}

}