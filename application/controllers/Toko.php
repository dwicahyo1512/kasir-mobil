<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('toko_m');
        check_not_login();
    }

    public function index()
    {
        $data['toko'] = $this->toko_m->get()->result();
        $this->template->load('template', 'toko/toko_data', $data);
    }

    public function cek_toko()
    {
        $name = $this->input->post('data');
        $cek_data = $this->toko_m->cek_data($name)->row_array();
        $return_data = ($cek_data) ? "ADA" : "TIDAK ADA";

        header('Content-Type: application/json');
        echo json_encode($return_data);
    }

    public function save()
    {
        $post = $this->input->post();
        $this->toko_m->save($post);
        $this->session->set_flashdata('pesan', 'Data toko berhasil di tambah.');
        redirect('toko');
    }

    public function edit()
    {
        $id = $this->input->post('toko_id');
        $data = $this->toko_m->get($id)->row_array();
        header('Content-Type: application/json');
        echo json_encode($data);
        // var_dump($data);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->toko_m->update($post);

        $this->session->set_flashdata('pesan', 'Data toko berhasil diupdate.');
        redirect('toko');
    }

    public function delete()
    {
        $id = $this->input->post('toko_id');
        $this->toko_m->delete($id);
        $error = $this->db->error();
        if ($error['code'] != 0) {
            echo '<script>alert("Data toko tidak bisa dihapus, karena masih memiliki relasi");</script>';
        } else {
            $this->session->set_flashdata('pesan', 'Data toko berhasil di hapus!');
        }
        redirect('toko');
    }
}
