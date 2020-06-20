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
		$qty = (int) $this->input->post('qty_order');
		$unit = $this->input->post('unit_order');
		$harga = $this->db->get_where('tbl_produk_harga', ['id_prod' => $id, 'satuan' => $unit])->row_array();
		$total = $qty * $harga['harga'];

		// if ($qty > 0) {
		// 	$data = array(
		// 		'id' => $id,
		// 		'qty' => $qty,
		// 		'price' => $total,
		// 		'name' => $name,
		// 		'options' => array('Size' => $unit)
		// 	);

		// 	$this->cart->insert($data);

		// 	echo json_encode(['status' => true]);
		// 	exit;
		// } else {
		// 	echo json_encode(['status' => false]);
		// 	exit;
		// }

		if ($qty > 0) {
			if (!empty($sess_id)) {
				$where = array(
					'sess_id' => $sess_id,
					'id_item' => $id,
					'satuan_item' => $unit
				);

				$cart = $this->m_cart->find($where);
				if ($cart->num_rows() > 0) {
					$li_cart = $cart->row_array();

					$data = array(
						'qty_item' => $qty + $li_cart['qty_item'],
						'amount_item' => $total + $li_cart['amount_item']
					);

					$this->m_cart->updateCart($data, $where);

					echo json_encode(['status' => true]);
					exit;
				} else {
					$data = array(
						'sess_id' => $sess_id,
						'id_item' => $id,
						'nm_item' => $name,
						'qty_item' => $qty,
						'satuan_item' => $unit,
						'amount_item' => $total
					);

					$this->m_cart->addCart($data);

					echo json_encode(['status' => true]);
					exit;
				}
			} else {
				$data = array(
					'sess_id' => $sess_id,
					'id_item' => $id,
					'nm_item' => $name,
					'qty_item' => $qty,
					'satuan_item' => $unit,
					'amount_item' => $total
				);

				$this->m_cart->addCart($data);

				echo json_encode(['status' => true]);
				exit;
			}
		} else {
			echo json_encode(['status' => false]);
			exit;
		}
	}
}
