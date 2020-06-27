<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_detail extends CI_Model
{
	public function find($id)
    {
        return $this->db->get_where('tbl_produk', ['id' => $id])->row_array();
    }
}
