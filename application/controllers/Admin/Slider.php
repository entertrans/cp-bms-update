<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Slider extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$content = 'admin/slider';
		$data['slider'] = $this->db->get('tbl_slider')->result_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content, $data);
	}

	public function add()
	{
		// var_dump($_FILES);
		// var_dump($_POST);
		// exit();
		$config['upload_path'] = './assets/mockup/core/img/slider'; //path folder
		$config['allowed_types'] = 'jpg|jpeg|png|pdf'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya
		$this->load->library('upload', $config);
		// $this->upload->initialize($config);
		if (!empty($_FILES['xfile']['name'])) {
			if ($this->upload->do_upload('xfile')) {
				$gbr = $this->upload->data();
				$file = $gbr['file_name'];

				$dt_slider = array(
					'photo_slider' => $file,
					'kt_slider' => strip_tags($this->input->post('kategori')),
					'judul_slider' => strip_tags($this->input->post('judul')),
					'desc_slider' => strip_tags($this->input->post('deskripsi')),
				);

				$this->db->insert('tbl_slider', $dt_slider);
				echo "<script type='text/javascript'>alert('data berhasil ditambahkan');window.location.replace('./');</script>";
			} else {
				echo "<script type='text/javascript'>alert('gagal ditambahkan');window.location.replace('./');</script>";
			}
		} else {
			redirect('admin/slider');
		}
	}
	public function aktifkan($id, $opsi)
	{
		$slider = $this->db->select_sum('aktifkan')->get('tbl_slider')->row_array();
		if ($opsi == 0) {
			if ($slider['aktifkan'] == 1) {
				echo json_encode(['status' => false]);
				exit;
			} else {
				$this->db->update('tbl_slider', ['aktifkan' => $opsi], ['id_slider' => $id]);
				echo json_encode(['status' => true]);
				exit;
			}
		} else {
			$this->db->update('tbl_slider', ['aktifkan' => $opsi], ['id_slider' => $id]);
			echo json_encode(['status' => true]);
			exit;
		}
	}

	public function hapus($id)
	{
		// var_dump($_POST);
		// exit();
		// $data = $this->input->post('filephoto');
		// $path = './assets/mockup/core/img/slider/' . $data;
		// unlink($path);
		// $this->db->delete('tbl_slider', ['id_slider' => $this->input->post('id')]);
		// echo "<script type='text/javascript'>alert('berhasil dihapus');window.location.replace('./');</script>";

		$slider = $this->db->get('tbl_slider')->num_rows();
		if ($slider == 1) {
			echo json_encode(['status' => false]);
			exit;
		} else {
			$data = $this->db->get_where('tbl_slider', ['id_slider' => $id]);
			if ($data->num_rows() > 0) {
				$dt = $data->row_array();
				$path = './assets/mockup/core/img/slider/' . $dt['photo_slider'];

				unlink($path);
				$this->db->delete('tbl_slider', ['id_slider' => $id]);
				echo json_encode(['status' => true]);
				exit;
			}
		}
	}
}
