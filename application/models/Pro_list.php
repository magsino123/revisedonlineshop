<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pro_List extends CI_Model
{
	
	public function showAllPro()
	{
		$query = $this->db->get('product');
		if ($query->num_rows() > 0) {
			return $query->result();
		}else{
			return false;
		}
	}
}