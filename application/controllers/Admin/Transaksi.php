<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$content = 'admin/transaksi';

		$customer = $this->db->get('tbl_pelanggan')->result_array();

		$data = array(
			'customer' => $customer
		);

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function invoice($invoice)
	{
		$customer = $this->db->get_where('tbl_pelanggan', ['invoice' => $invoice])->row_array();
		$order = $this->db->get_where('tbl_order', ['invoice' => $invoice])->result_array();
		$total = $this->db->select_sum('price')->from('tbl_order')->where(['invoice' => $invoice])->get()->row_array();

		$data = array(
			'customer' => $customer,
			'order' => $order,
			'total' => $total
		);

		echo json_encode(['result' => $data]);
		exit;
	}

	public function status($invoice)
	{
		$this->db->update('tbl_order', ['status_order' => 'Sudah dibayar'], ['invoice' => $invoice]);
		echo json_encode(['status' => true]);
		exit;
	}
	
	public function hapus($invoice)
	{
		$this->db->delete('tbl_order', ['invoice' => $invoice]);
		$this->db->delete('tbl_pelanggan', ['invoice' => $invoice]);
		echo json_encode(['status' => true]);
		exit;
	}
}
