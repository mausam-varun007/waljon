<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();
        $_POST = json_decode(file_get_contents('php://input'), true);        
        $this->load->model('Home_model','Home');   
        $this->load->helper('common');      
   	}
   	public function index()
	{
		$this->load->view('index');
	}

	public function view($page)
	{
    switch ($page) {
      case 'home': 
    			$this->load->view('website/header');
					$this->load->view('website/home');
					$this->load->view('website/footer');
          break; 
      case 'login': 
    			$this->load->view('website/header');
					$this->load->view('website/login');
					$this->load->view('website/footer');
          break;
      case 'signup': 
    			$this->load->view('website/header');
					$this->load->view('website/signup');
					$this->load->view('website/footer');
          break;          
            
    }  
	}

	public function UserSignUp()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST')  {
			$this->form_validation->set_rules('firstname', 'firstname','required');
			$this->form_validation->set_rules('lastname', 'lastname','required');
			$this->form_validation->set_rules('email', 'email','required|valid_email');
			$this->form_validation->set_rules('password', 'password','required');
			if ($this->form_validation->run() == FALSE){
          echo json_encode(array('status'=>0,'msg'=>validation_errors()));
      }
      else{
      	$data = array('firstname'=>$this->input->post('firstname'),
											'lastname'=>$this->input->post('lastname'),
											'email'=>$this->input->post('email'),
											'password'=>md5($this->input->post('password')));
				$this->Home->insertData('users',$data);
				echo json_encode(array('status'=>1,'msg'=>'Account created successfully! Please login '));
      }
		}
	}
	public function UserLogIn()
		{
			if ($this->input->server('REQUEST_METHOD') == 'POST')  {
				$this->form_validation->set_rules('email', 'email','required|valid_email');
				$this->form_validation->set_rules('password', 'password','required');
				if ($this->form_validation->run() == FALSE){
	          echo json_encode(array('status'=>0,'msg'=>validation_errors()));
	      }
	      else{
	      	$IsValidUser = $this->Home->getRowData('users','*',array('email'=>$this->input->post('email'),'password'=>md5($this->input->post('password'))));
	      	if ($IsValidUser) {
	      		$authToken  = generateAuthToken();
	      		$userData = array('user_id'=>$IsValidUser->id,
	      											'Auth_Token' => $authToken,
	      											'email'=>$IsValidUser->email,
	      											'firstname'=>$IsValidUser->firstname,
	      											'logged_in' => TRUE);
	      		$this->session->set_userdata($userData); 
	      		echo json_encode(array('status'=>1,'msg'=>'Login successfully','data'=>$userData)); 
	      	}
	      	else{
	      		echo json_encode(array('status'=>0,'msg'=>'Invalid username and password'));
	      	}
	      }
			}
		}	


	public function filter()
	{
		$this->load->view('website/filter');
	}
	public function Details()
	{
		$this->load->view('website/Details');
	}
	public function Contact()
	{
		$this->load->view('website/Contact');
	}
		
}
