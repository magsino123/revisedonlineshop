<?php
class Product_model extends CI_Model
{
	
	public function insert($company)
	{
		$this->db->insert($company);
	}
	public function saverecords($username,$password,$email){
		$query = "insert into users values('','$username','$password','$email')";
		$this->db->query($query);
	}
	public function getproduct(){
		$getpro = $this->db->query('select * from product');
		return $getpro->result();
	}
	public function register($user){
		return $this->db->insert('users', $user);
	}

}