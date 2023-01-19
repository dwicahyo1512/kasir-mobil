<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko_m extends CI_Model
{

    public function get($id = null)
    {
        $this->db->select();
        $this->db->from('toko');
        if ($id != null) {
            $this->db->where('toko_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function save($post)
    {
        $data = [
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'desc' => $this->input->post('desc')
        ];

        $this->db->insert('toko', $data);
    }

    public function update($post)
    {
        $data = [
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'address' => $this->input->post('address'),
            'desc' => $this->input->post('desc'),
            'updated' => date('Y-m-d H:i:s')
        ];

        $this->db->where('toko_id', $this->input->post('toko_id'));
        $this->db->update('toko', $data);
    }

    public function cek_data($name)
    {
        $this->db->select();
        $this->db->from('toko');
        $this->db->where('name', $name);
        $query = $this->db->get();
        return $query;
    }

    public function delete($id)
    {
        $this->db->where('toko_id', $id);
        $this->db->delete('toko');
    }
}
