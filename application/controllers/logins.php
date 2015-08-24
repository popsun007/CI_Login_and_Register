<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('login');
	}
	public function index()
	{
		$this->load->view('login_out/index');
	}
	public function register()
	{
		$infos = $this->login->add_user($this->input->post());
		$show = array('first_name' => $infos['first_name'],
					'last_name' => $infos['last_name'],
					'email' => $infos['email']);
		$this->load->view('login_out/profile', $show);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */