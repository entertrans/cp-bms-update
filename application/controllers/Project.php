<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller
{
	public function index()
	{

		$data['dokumentasi'] = $this->db->get('tbl_dokumentasi')->result_array();
		$this->load->view('mockup/layout/core/header');
		$this->load->view('mockup/layout/core/css');
		$this->load->view('mockup/layout/core/topbar');
		$this->load->view('project',$data);
		$this->load->view('mockup/layout/core/footer');
	}

}
