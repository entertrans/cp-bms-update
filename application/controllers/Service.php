<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Service extends CI_Controller
{
	public function index()
	{
		$this->load->view('mockup/layout/core/header');
		$this->load->view('mockup/layout/core/css');
		$this->load->view('mockup/layout/core/topbar');
		$this->load->view('service');
		$this->load->view('mockup/layout/core/footer');
	}

	public function find($id)
	{
		$data['produk'] = $this->db->get_where('tbl_produk', ['id' => $id])->row_array();
		$data['satuan'] = $this->db->get_where('tbl_produk_harga', ['id_prod' => $id])->result_array();
		echo json_encode($data);
		exit;
	}

	public function order()
	{
		$sess_id = $this->input->ip_address();
		$id = $this->input->post('id_prod');
		$name = $this->input->post('nm_prod');
		$qty = $this->input->post('qty_order');
		$unit = $this->input->post('unit_order');
		$harga = $this->db->get_where('tbl_produk_harga', ['id_prod' => $id, 'satuan' => $unit])->row_array();

		if ($qty > 0) {
			$data = array(
				'id' => $id,
				'qty' => $qty,
				'price' => $harga['harga'],
				'name' => $name,
				'options' => array('Size' => $unit)
			);

			$this->cart->insert($data);

			echo json_encode(['status' => true]);
			exit;
		} else {
			echo json_encode(['status' => false]);
			exit;
		}
	}

	public function list_produk($id_prod, $counter)
	{
		$qry = "select * from tbl_produk a inner join (select * from tbl_produk_foto group by id_produk) b on a.id = b.id_produk where a.id_prod_kategori = " . $id_prod . " limit " . $counter . "";
		$list = $this->db->query($qry)->result_array();

		echo json_encode($list);
		exit;
	}
}
