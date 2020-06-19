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
		$data['produk'] = $this->db->get_where('tbl_service', ['id' => $id])->row_array();
		$data['satuan'] = $this->db->get_where('tbl_service_detail', ['id_serv' => $id])->result_array();
		echo json_encode($data);
		exit;
	}

	public function order()
	{
		$id = $this->input->post('id');
		$name = $this->input->post('name');
		$qty = $this->input->post('qty');
		$harga = $this->input->post('harga');
		$satuan = $this->input->post('satuan');
		$total = $qty * $harga;

		$data = array(
			'id' => $id,
			'qty' => $qty,
			'price' => $total,
			'name' => $name,
			'options' => array('Size' => $satuan)
		);

		$this->cart->insert($data);

		echo json_encode(['status' => true]);
		exit;
	}
}
