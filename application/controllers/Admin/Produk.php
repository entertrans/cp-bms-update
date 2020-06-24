<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('M_produk', 'm_produk');
	}

	public function index()
	{
		$content = 'admin/produk';

		$data['produk'] = $this->m_produk->get();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function get_foto($id)
	{
		$data = $this->db->get_where('tbl_produk_foto', ['id_produk' => $id])->result_array();
		echo json_encode($data);
		exit;
	}

	public function delete($id)
	{
		$this->m_produk->delete($id);
		echo json_encode(['status' => true]);
		exit;
	}

	public function add()
	{
		$data = array(
			'nm_produk' => input('nm_produk'),
			'deskripsi' => input('deskripsi'),
			'id_prod_kategori' => input('kategori')
		);
		$this->m_produk->add($data);
		echo json_encode(['status' => true]);
		exit;
	}

	public function edit($id)
	{
		$data = $this->m_produk->find($id);
		echo json_encode($data);
		exit;
	}

	public function update()
	{
		$where = ['id' => input('id_produk')];
		$data = array(
			'nm_produk' => input('nm_produk'),
			'deskripsi' => input('deskripsi'),
			'id_prod_kategori' => input('kategori')
		);
		$this->m_produk->update($data, $where);
		echo json_encode(['status' => true]);
		exit;
	}


	public function media($id)
	{
		$content = 'admin/media';

		$data['produk'] = $this->m_produk->find($id);

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function harga($id)
	{
		$content = 'admin/harga';

		$data['produk'] = $this->m_produk->find($id);

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function simpan_harga()
	{
		$data = array(
			'id_prod' => input('id_prod'),
			'satuan' => input('satuan_produk'),
			'harga' => input('harga_produk')
		);
		$this->db->insert('tbl_produk_harga', $data);
		echo json_encode(['status' => true]);
		exit;
	}

	public function simpan_media()
	{
		$ext = $_FILES['media_produk']['type'];
		$exp = explode('/', $ext);
		// $get_prod = $this->db->get_where('tbl_produk', ['id' => input('id_prod')])->row_array();

		if ($exp[0] == 'image') {
			$config['upload_path'] = "./assets/mockup/core/img/produk";
			$config['allowed_types'] = 'jpg|jpeg';
			$config['encrypt_name'] = false;
		} else {
			$config['upload_path'] = "./assets/mockup/core/video";
			$config['allowed_types'] = 'mp4';
			$config['encrypt_name'] = false;
			$config['max_size'] = '3500000'; // 3,5 MB
		}

		$dt = $this->db->select('*')->from('tbl_produk_foto')->where(['id_produk' => input('id_prod')])->order_by('nm_foto', 'desc')->limit(1)->get();
		$res_dt = $dt->row_array();
		$file = explode('.', $res_dt['nm_foto']);
		if ($dt->num_rows() > 0) {
			$config['file_name'] = $file[0] . '.' . $exp[1];
		} else {
			$config['file_name'] = strtolower(str_replace(' ', '-', input('nm_produk'))) . '.' . $exp[1];
		}

		$this->load->library('upload', $config);
		if (!empty($_FILES['media_produk']['name'])) {
			if ($this->upload->do_upload('media_produk')) {
				$res = $this->upload->data();

				$filename = $res['file_name'];

				if ($exp[0] == 'image') {
					$this->db->insert('tbl_produk_foto', ['id_produk' => input('id_prod'), 'nm_foto' => $filename]);
				} else {
					$this->db->update('tbl_produk', ['video' => $filename], ['id' => input('id_prod')]);
				}

				echo json_encode(['status' => true]);
				exit;
			} else {
				echo json_encode(['status' => false, 'msg' => $this->upload->display_errors()]);
				exit;
			}
		} else {
			echo json_encode(['status' => false, 'msg' => $this->upload->display_errors()]);
			exit;
		}
	}
}
