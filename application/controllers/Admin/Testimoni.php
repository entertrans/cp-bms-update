<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Testimoni extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function index()
	{
		$content = 'admin/testimoni';
		$data['testimonial'] = $this->db->get('tbl_testimonial')->result_array();

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content,$data);
	}
	public function add(){
	        	$config['upload_path'] = './assets/mockup/core/img/testimoni'; //path folder
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

	            		$dt_testimoni = array(
	            			'photo_testi' => $file,
	            			'nm_testi' => strip_tags($this->input->post('nama')),
	            			'jbt_testi' => strip_tags($this->input->post('jabatan')),
	            			'desc_testi' => strip_tags($this->input->post('deskripsi')),
	            			'bintang' => strip_tags($this->input->post('bintang'))
	            		);

	            		$this->db->insert('tbl_testimonial', $dt_testimoni);
	            		echo "<script type='text/javascript'>alert('data berhasil ditambahkan');window.location.replace('./');</script>";
	            	}else{
	            		echo "<script type='text/javascript'>alert('gagal ditambahkan');window.location.replace('./');</script>";
	            	}

	            }else{
	            	redirect('admin/testimoni');
	            }
	        }
	        public function hapus(){
	        	$data = $this->input->post('filephoto');
	        	$path='./assets/mockup/core/img/testimoni/'.$data;
	        	unlink($path);
	        	$this->db->delete('tbl_testimonial', ['id_testimonial' => $this->input->post('id')]);
	        	echo "<script type='text/javascript'>alert('berhasil dihapus');window.location.replace('./');</script>";
	        }
	    }
