<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Passengers extends CI_Controller {

    public function __construct(){
		parent::__construct();
		$this->load->model('global_model');
        $this->load->model('passenger_model');
	}

    private function get_language($en = false) {
        $data = array (
            'text1' => 'Terima kasih atas kerjasama Anda dalam pemeriksaan pabean untuk mengidentifikasi adanya narkotika, obat-obatan terlarang, barang terkait terorisme, uang dan/atau instrument pembayaran lainnya yang terkait dengan pencucian uang, dan/atau penyelundupan barang yang melanggar peraturan perundang-undangan Negara Indonesia',
            'text2' => 'Membawa barang-barang tersebut yang tidak sesuai dengan ketentuan dan/ atau melakukan penyelundupan, merupakan pelanggaran dan dikenakan sanksi.',
            'button' => 'Selanjutnya',
            'passenger' => array(
                'header' => 'Data Penumpang'
            ),
            'goods' => array(
                't&m' => 'Barang pribadi Penumpang, per orang per kedatangan, mendapatkan pembebasan bea masuk, cukai, dan pajak paling banyak senilai USD 500.00 dari nilai pabean barang yang dibeli/diperoleh di luar negeri dan tidak dibawa kembali keluar negeri.
                Barang pribadi Awak Sarana Pengangkut, per orang per kedatangan, mendapatkan pembebasan bea masuk, cukai, dan pajak paling banyak senilai USD 50.00 dari nilai pabean barang yang dibeli/ diperoleh di luar negeri dan tidak dibawa kembali keluar negeri.
                Bagi Anda yang membawa barang impor yang akan digunakan untuk tujuan selain keperluan pribadi (jumlah tidak wajar untuk dipakai/konsumsi sendiri atau untuk keperluan perusahaan/ toko/ institusi/ industri), dipungut bea masuk dan pajak.',
                't&m2' => 'Barang Kena Cukai untuk keperluan pribadi yang dibeli/ diperoleh di luar negeri dan tidak ditujukan untuk dibawa kembali keluar negeri, diberikan pembebasan bea masuk, cukai dan pajak per orang dewasa untuk setiap kedatangan sebanyak :
                    <table>
                    <tr>
                        <td>1.</td><td colspan="2">Penumpang</td></tr>
                    <tr>
                        <td>&nbsp;</td><td>a.</td><td>Usia 18 tahun keatas : 200 batang sigaret, 25 batang cerutu, atau 100 gram tembakau iris/produk hasil tembakau dan/atau</td></tr>
                        <tr>
                    <tr>    
                        <td>&nbsp;</td><td>b.</td><td>Usia 21 tahun keatas : 1 liter minuman mengandung etil alkohol, atau</td></tr>
                    <tr>
                        <td>2.</td><td colspan="2">Awak Sarana Pengangkut</td></tr>
                    <tr>
                        <td>&nbsp;</td><td colspan="2">40 batang sigaret, 10 batang cerutu, 40 gram tembakau iris/hasil tembakau lainnya, dan atau 350 mililiter minuman mengandung etil alkohol</td></tr>
                    </table>
                    Barang kena cukai yang melebihi jumlah tersebut, atas kelebihannya langsung dimusnahkan oleh Pejabat Bea dan Cukai',
                't&m3' => 'Anda wajib memberitahukan kepada Petugas Bea dan Cukai jika membawa :
                    <table>
                    <tr>
                        <td>1.</td><td>uang dan/atau instrumen pembayaran lainnya dalam bentuk cek, cek perjalanan, surat sanggup bayar, atau bilyet giro, dalam rupiah atau dalam mata uang asing senilai Rp100.000.000,00 (seratus juta rupiah) atau lebih, atau</td>
                    </tr>
                    <tr>
                        <td>2.</td><td>uang kertas asing paling sedikit setara dengan Rp1.000.000.000,00 (satu milyar rupiah).</td>
                    </tr>
                    </table>'
            )
        );

        if ($en) {
            $data = array (
                'text1' => 'Directorate General of Customs and Excise would like to thank you for your kind cooperation during the inspection to identify narcotics, illegal drugs, any articles which are related to terrorism activities, currency, and/or bearer negotiable instruments which are related to money laundering, and/or smuggling activities, that violate state laws and regulation of Indonesia.',
                'text2' => 'Illicitly bringing those goods into Indonesia and doing smuggling activities, are considered violations and will lead to legal action.',
                'button' => 'Next',
                'passenger' => array(
                    'header' => 'Passenger'
                ),
                'goods' => array(
                    't&m' => 'Every personal crew goods, per person on every arrival, is granted import duties, excise, and taxes exemption of USD 50.00 on his/her personal goods (personal effect) that were purchased or obtained abroad and will remain in Indonesia 
                    For those who import goods for other purposes than personal use (e.g. the total amount of the goods are unusual for personal use or the goods are used for commercial purposes such as companies/store/institution/industry), are subject to import duties, excise, and taxes.',
                    't&m2' => 'The following amount of excusable goods for personal use that were purchased or obtained abroad and will remain in Indonesia are exempted from Import duties, excise, and taxes for every arrival:
                    <table>
                    <tr>
                        <td>1.</td><td colspan="2">Passenger</td></tr>
                    <tr>
                        <td>&nbsp;</td><td>a.</td><td>18 years old or above: 200 cigarettes, 25 cigars, or 100 grams of sliced tobacco or other tobacco products, and/ or</td></tr>
                        <tr>
                    <tr>    
                        <td>&nbsp;</td><td>b.</td><td>21 years old or above:  1 liter of alcoholic beverages, or                        </td></tr>
                    <tr>
                        <td>2.</td><td colspan="2">Crew</td></tr>
                    <tr>
                        <td>&nbsp;</td><td colspan="2">40 cigarettes, 10 cigars, or 40 grams of sliced tobacco or other tobacco products, and/or 350 milliliter of alcoholic beverages</td></tr>
                    </table>
                    Upon the excess of the excisable goods will be destroyed',
                    't&m3' => 'You are required to notify the Customs Officer if you are bringing :
                    <table>
                    <tr>
                        <td>1.</td><td>currency and/or bearer negotiable instrument (cheque, traveller cheque, promissory notes, or bilyet giro) in Rupiah or other currencies which equal to the amount 100 million Rupiah or more, or</td>
                    </tr>
                    <tr>
                        <td>2.</td><td>foreign banknotes which equal to the amount of 1 billion Rupiah or more.</td>
                    </tr>
                    </table>'
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
        $data['questions'] = $this->passenger_model->get_questions($en);
		$this->load->view('passengers', $data);
	}

}