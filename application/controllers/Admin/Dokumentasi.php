<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dokumentasi extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$content = 'admin/dokumentasi';
		$data['dokumentasi'] = $this->db->get('tbl_dokumentasi')->result_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content,$data);
	}

	public function add(){
		// var_dump($_POST);
		// exit();
	        	$config['upload_path'] = './assets/mockup/core/img/dokumentasi'; //path folder
	            $config['allowed_types'] = 'jpg|jpeg|png|pdf'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya
	            $this->load->library('upload', $config);
	            // $this->upload->initialize($config);
	            if(!empty($_FILES['xfile']['name']))
	            {
	            	if ($this->upload->do_upload('xfile'))
	            	{
	            		$gbr = $this->upload->data();
	            		$file=$gbr['file_name'];

	            		$dt_dokumentasi = array(
	            			'photo_dok' => $file,
	            			'pr_title' => strip_tags($this->input->post('title')),
	            			'pr_desc' => strip_tags($this->input->post('deskripsi')),
	            		);

	            		$this->db->insert('tbl_dokumentasi', $dt_dokumentasi);
	            		echo "<script type='text/javascript'>alert('data berhasil ditambahkan');window.location.replace('./');</script>";
	            	}else{
	            		echo "<script type='text/javascript'>alert('gagal ditambahkan');window.location.replace('./');</script>";
	            	}

	            }else{
	            	redirect('admin/dokumentasi');
	            }
	        }

	        public function hapus(){
	        	// var_dump($_POST);
	        	// exit();
	        	$data = $this->input->post('filephoto');
	        	$path='./assets/mockup/core/img/dokumentasi/'.$data;
	        	unlink($path);
	        	$this->db->delete('tbl_dokumentasi', ['id_dokumentasi' => $this->input->post('id')]);
	        	echo "<script type='text/javascript'>alert('berhasil dihapus');window.location.replace('./');</script>";
	        }
	    }
