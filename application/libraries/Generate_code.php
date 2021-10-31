<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once 'phpqrcode/qrlib.php';

class Generate_code {

    public function generate($id) {
        $tempdir = "../ecd_temp/temp/";

        if (!file_exists($tempdir)) {
            mkdir($tempdir);
        }  
        // save qr code on folder temp
        $fileName = time() . '_' . rand(1, 1000) . '.png';
        $path = $tempdir . $fileName;
        $save = QRcode::png($id, $path, "H", 6, 4, 0); 

        return $fileName;   
    }
}