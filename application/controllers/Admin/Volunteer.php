<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Volunteer extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_volunteer');
	}

	public function index()
	{
		$content = 'admin/volunteer';

		$this->load->view('admin/layout/header');
		$this->load->view('admin/layout/navbar');
		$this->load->view('admin/layout/sidebar');
		$this->load->view($content);
	}
}
