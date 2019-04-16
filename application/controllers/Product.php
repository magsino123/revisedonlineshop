<?php 

class Product extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
			$this->load->model('Pro_list');
		}
		public function showAllProduct(){
			$result = $this->Pro_list->showAllPro();
			echo json_encode($result);
		}

}