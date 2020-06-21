<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_cart extends CI_Model
{
    public function get($sess_id)
    {
        $data = $this->db->get_where('tbl_cart', ['sess_id' => $sess_id]);
        return $data;
    }

    public function find($where)
    {
        $data = $this->db->get_where('tbl_cart', $where);
        return $data;
    }

    public function addCart($data)
    {
        return $this->db->insert('tbl_cart', $data);
    }

    public function updateCart($data, $where)
    {
        return $this->db->update('tbl_cart', $data, $where);
    }

    public function deleteCart($sess_id)
    {
        return $this->db->delete('tbl_cart', ['sess_id' => $sess_id]);
    }
}
