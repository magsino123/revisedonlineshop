 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('admin_model');
	}

	public function index(){
		//load session library
		$this->load->library('session');

		//restrict users to go back to login if session has been set
		if($this->session->userdata('user')){
			redirect('main/validate');
		}
		else{
			$this->load->view('login');
		}
	}

	public function login(){
		//load session library
		$this->load->library('session');
 
		$output = array('error' => false);
 
		$username = $_POST['username'];
		$password = $_POST['password'];
 
		$data = $this->users_model->login($username, $password);
 
		if($data){
			$this->session->set_userdata('user', $data);
			$output['message'] = 'Logging in. Please wait...';
		}
		else{
			$output['error'] = true;
			$output['message'] = 'Login Invalid. User not found';
		}
 
		echo json_encode($output); 
	}
 
	public function home(){
		//load session library
		$this->load->library('session');
 
		//restrict users to go to home if not logged in
		if($this->session->userdata('user')){
			$this->load->view('pages/home');
		}
		else{
			redirect('/');
		}
 
	}
 
	public function logout(){
		//load session library
		$this->load->library('session');
		$this->session->unset_userdata('user');
		redirect('/');
	}
 


	public function admindashboard(){
		$this->load->model('product_model');
		$data['data']=$this->product_model->get_all_product();
		$this->load->view('templates/admin_header');
		$this->load->view('pages/getuser');
		$this->load->view('templates/footer');
	}
	public function register(){
		$output = array('error' => false);
		$this->load->model('product_model');
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'required|min_length[7]|max_length[30]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$output['error'] = 'true';
			$output['message'] = validation_errors();
		}
		else{
			$user['username'] = $_POST['username'];
			$user['email'] = $_POST['email'];
			$user['password'] = $_POST['password'];

			$query = $this->product_model->register($user);

			if ($query) {
				$output['message'] = 'User Successfully Registered';
			}else{
				$output['error'] = true;
				$output['message'] = 'User Successfully Registered';
			}
		}
		echo json_encode($output);
	}

}
