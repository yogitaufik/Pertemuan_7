<?php

class Pembeli extends CI_Controller {

    public function index() {

        $this->load->vew('v_input_transaksi');
    }

    public function cetak() {
        $data = [
            'nama' => $this->input->post('nama'),
            'nomor' => $this->input->post('nomor')];
        $this->load->view('v_output_transaksi', $data);
    }
}
