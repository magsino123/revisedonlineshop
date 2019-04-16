<?php
class Pages extends CI_Controller {

		/**
		*------------------------------------------------
		*@author Jason
		*
		*@uses view, It is the main page of the website
		*
		*@param 
		*string - $page -  handles the home.php file in views/pages folder and declare as the main page of the system 
		*
		*
		*
		*
		*
		*
		*@return
		*------------------------------------------------				
		*/
    public function view($page = 'home'){
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
      }

        $data['title'] = ucfirst($page); 

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
			}
			/**
		*------------------------------------------------
		*@author Jason
		*
		*@uses login, display the UI interface of Login form
		*
		*@param 
		*string - $page -  handles the home.php file in views/pages folder and declare as the main page of the system 
		*
		*
		*
		*
		*
		*
		*@return login page
		*------------------------------------------------				
		*/
		public function login(){
					$this->load->view('templates/header');
					$this->load->view('pages/login');
			}

				
		public function savedata(){
							$this->load->database();
							$this->load->model('Product_model');
					if ($this->input->post('save')) {
							$n = $this->input->post('username');
							$e = $this->input->post('password');
							$m = $this->input->post('email');

							$this->Product_model->saverecords($n,$e,$m);
							$this->load->view('templates/header.php');
 							$this->load->view('pages/login.php');

 							echo "<script>alert('Successfully Save !');</script>";
 							//redirect('pages/login');
					}
			}

		public function product(){
					$this->load->view('templates/header');
					$this->load->view('pages/products');
					$this->load->view('templates/footer');
			}
		public function admin_dashboard(){
					$this->load->view('templates/admin_header');
					$this->load->view('admin/admindash');
			}
		public function logout(){
			$this->load->library('session');
			$this->session->unset_userdata();
			header('location:'.base_url().'main/main_page');
		}
		}