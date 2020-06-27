<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$content = 'admin/login';
		$this->load->view($content);
	}

	function auth()
	{
		$username = strip_tags(str_replace("'", "", $this->input->post('username')));
		$password = strip_tags(str_replace("'", "", $this->input->post('password')));

		$data = $this->db->get_where('tbl_admin', ['user' => $username, 'password' => md5($password)]);


		if ($data->num_rows() > 0) {
			$this->session->set_userdata('user', $username);
			redirect('admin/beranda');
		} else {
			redirect('admin/login/failed');
		}
	}

	function failed()
	{
		$this->session->set_flashdata('msg', 'Username atau Password salah');
		return $this->index();
	}

	function superadmin()
	{
		if ($this->session->userdata('id') != 'samsul' && $this->session->userdata('pw') != 'samsul') {
			redirect('login', 'refresh');
		}
		$this->load->view('admin/v_superadmin');
	}

	function logout()
	{
		$this->session->sess_destroy();
		$url = base_url('admin/login');
		redirect($url);
	}
}
