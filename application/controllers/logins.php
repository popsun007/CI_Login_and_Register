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
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[8]|md5');
		$this->form_validation->set_rules('com_password', 'Comfirm Password', 'required|trim|matches[password]|md5');
		if($this->form_validation->run() == true)
		{	
			$exist_email = $this->login->check_email($this->input->post());
			if($exist_email)
			{
				$this->session->set_flashdata('reg_errors', "This email has been registered already!");
				redirect('/');
			}
			else
			{
				$this->login->add_user($this->input->post());
				$this->session->set_userdata('user_data', $this->input->post());
				redirect('/logins/profile');
			}
		}
		else
		{
			$this->session->set_flashdata('reg_errors', validation_errors());
			redirect('/');
		}
	}
	public function log_off()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	public function log_in()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|trim|vaild_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if($this->form_validation->run() ===true)
		{
			$infos = $this->login->get_email($this->input->post());
			if($infos)
			{	
				$this->session->set_userdata('user_data', $infos);
				redirect('/logins/profile');
			}
			else
			{
				$this->session->set_flashdata('errors', "email and/or password is not match!");
				redirect('/');
			}
		}
		else
		{
			$this->session->set_flashdata('errors', "email and/or password can not be empty!");
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