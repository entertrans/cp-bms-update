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
		$id = $this->input->post('id_prod');
		$name = $this->input->post('nm_prod');
		$qty = $this->input->post('qty_order');
		$unit = $this->input->post('unit_order');
		$harga = $this->db->get_where('tbl_produk_harga', ['id_prod' => $id, 'satuan' => $unit])->row_array();
		$total = $qty * $harga['harga'];

		$data = array(
			'id' => $id,
			'qty' => $qty,
			'price' => $total,
			'name' => $name,
			'options' => array('Size' => $unit)
		);

		$this->cart->insert($data);

		echo json_encode(['status' => true]);
		exit;
	}
}
