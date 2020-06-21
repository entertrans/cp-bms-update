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

		$data = $this->db->get_where('tbl_admin', ['user'=>$username, 'password'=>md5($password)])->row_array();
		

		if ($data == true) {
			$this->session->set_userdata('user', $username);
			redirect('admin/beranda');
		} else {
			redirect('admin/login/gagallogin');
		}
	}
	function gagallogin()
	{
		$url = base_url('admin/login');
		echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert"><span class="fa fa-close"></span></button> Username Atau Password Salah</div>');
		redirect($url);
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
