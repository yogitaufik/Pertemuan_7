<?php
defined('BASEPATH') or exit('No direct script access allowed')

class Sepatu extends CI_Controller 
{
    public function __construct()
    {
        parent :: __construct();
        $this->load->model('ModelSepatu');
    }

    public function index() {
        $this->load->helper('url');
        $this->load->view('v_input_transaksi');
    }

    public function cetak() {
        $this->form_validation->set_rules('nama', 'Nama Pembeli'),
        'required|min_length[3]', [
            'required' => 'Nama Pembeli Harus Diisi'
        ]);

        $this->form_validation->set_rules('nomor', 'Nomor HP'),
        'required|min_length[3]', [
            'required' => 'Nomor HP Harus Diisi'
        ]);

        if ($this->form_validation->run() != true){
            $this->load->view('v_input_transaksi');
        } else {
            $data = [
                'nama' => $this->input->post('nama'),
                'nomor' => $this->input->post('nomor'),
                'merk' => $this->input->post('merk'),
                'ukuran' => $this->input->post('ukuran')
                'harga' => $this->ModelSepatu->process($this->input->post('merk'))];

        $this->load->view('v_output_transaksi', $data);
        }
    }
}
