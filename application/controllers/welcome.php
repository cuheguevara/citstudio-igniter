<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
/*
 * @search_flight_token token untuk kunci penerbangan http://docs.tiket.com/
 * @url URL dari API
 * @ret_date kosongkan jika kepergian 1 arah
 * 
 */
    public function index() {
        
        $search_flight_token = 'isi token nya disini';
        $url = 'https://api.master18.tiket.com/search/flight';
        $berangkat = "CGK";
        $tujuan = "DPS";
        $tanggal = "2012-10-30";
        $jumlah_orang_dewasa = "1";
        $jumlah_anak_kecil = "0";
        $tanggal_kembali = '';
        $output = "json";

        $this->data['flight'] = json_decode(file_get_contents($url . '?d=' . $berangkat . '&a=' . $tujuan . '&date=' . $tanggal .
                        '&adult=' . $jumlah_orang_dewasa . '&child=' . $jumlah_anak_kecil . '&infant=0&ret_date='.$tanggal_kembali.'&token=' . $search_flight_token . '&output=' . $output), TRUE);

        $this->parser->parse('welcome_message', $this->data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */