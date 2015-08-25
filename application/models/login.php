<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Model
{
	function add_user($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password)
				VALUES(?, ?, ?, ?)";
		$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
		return $this->db->query($query, $values);
	}
	function get_email($post)
	{
		$query = "SELECT * FROM users WHERE email=? AND password=?";
		$value = array($post['email'], $post['password']);
		return $this->db->query($query, $value)->row_array();
	}
}
?>