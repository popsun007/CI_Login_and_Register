<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class login extends CI_Model
{
	function add_user($post)
	{
		$query = "INSERT INTO users (first_name, last_name, email, password)
				VALUES(?, ?, ?, ?)";
		$values = array($post['first_name'], $post['last_name'], $post['email'], $post['password']);
		$this->db->query($query, $values);
		$id = $this->db->insert_id();
		$query = "SELECT * FROM users WHERE id=?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}
}
?>