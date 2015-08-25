<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logins extends CI_Controller 
{
	// protected $show = array();
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
		$this->login->add_user($this->input->post());
		$this->session->set_userdata('user_data', $this->input->post());
		redirect('/logins/profile');
	}
	public function log_off()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	public function log_in()
	{
		$email = $this->input->post('email');
		$password = md5($this->input->post('password'));
		$infos = $this->login->get_email($email, $password);
		if($infos)
		{
			$show = array('first_name' => $infos['first_name'],
					'last_name' => $infos['last_name'],
					'email' => $infos['email'],
					'log_in' => TRUE);
			$this->session->set_userdata('user_data', $show);
			redirect('/logins/profile');
		}
		else
		{
			$this->session->set_flashdata('errors', "email or password is not match!");
			redirect('/');
		}
	}
	public function profile()
	{
		$user_data = array('user_data' => $this->session->userdata('user_data'));
		$this->load->view('login_out/profile', $user_data);
	}
}

?>