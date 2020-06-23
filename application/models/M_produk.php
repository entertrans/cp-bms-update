<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
    public function get()
    {
        // $data = $this->db->get('tbl_produk');
        $data = $this->db->select('*')->from('tbl_produk a')->join('tbl_produk_kategori b', 'a.id_prod_kategori = b.id_desc', 'inner')->get();
        return $data;
    }

    public function find($id)
    {
        $data = $this->db->get_where('tbl_produk', ['id' => $id])->row_array();
        return $data;
    }

    public function add($data)
    {
        return $this->db->insert('tbl_produk', $data);
    }

    public function update($data, $where)
    {
        return $this->db->update('tbl_produk', $data, $where);
    }

    public function delete($id)
    {
        $this->db->delete('tbl_produk', ['id' => $id]);
        $this->db->delete('tbl_produk_foto', ['id_produk' => $id]);
        $this->db->delete('tbl_produk_harga', ['id_prod' => $id]);
        return true;
    }
}
