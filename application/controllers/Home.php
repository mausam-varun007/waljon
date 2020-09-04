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
    case 'product-view': 
    			$this->load->view('website/header');
					$this->load->view('website/product-view');
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
	public function headerMenuList()
	{
		//$parent_category = $this->Home->getData('parent_category','*',array('is_active'=>1));
		$this->db->select('*');
		$this->db->from('parent_category');
		$this->db->where('is_active',1);
		$this->db->limit(9);
		$parent_category = $this->db->get()->result();
		if (!empty($parent_category)) {
			foreach ($parent_category as $key => $value) {
				$data[$key] = (array) $value;
				$category = $this->Home->getData('category','category,id',array('parent_category_id'=>$value->id,'is_active'=>1));
				if (!empty($category)) {
					foreach ($category as $key1 => $value1) {
						$data[$key]['category'][$key1] = (array) $value1;
						$subcategory = $this->Home->getData('subcategory','subcategory,id',array('category_id'=>$value1->id,'is_active'=>1));
						$data[$key]['category'][$key1]['subcategory'] = $subcategory;
					}
					
				}
			}
			/*echo "<pre>";
			print_r($data);
			exit();*/
			echo json_encode(array('status'=>1,'data'=>$data));
		}
	}
	public function test()
	{
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			
			 $config['upload_path'] = 'assets/img/';
		        $config['allowed_types'] = 'gif|jpg|png';
		        $config['encrypt_name'] = TRUE;
  				$this->upload->initialize($config);

			if ($_FILES['product_image']['name']) {
				if (!$this->upload->do_upload('product_image')) {
		            $error = array('error' => $this->upload->display_errors());
		        } else {
		        	$uploadData = $this->upload->data();
		            $data = array('product_image' => $this->upload->data());
		            $product_image = $uploadData['file_name'];
		        }
			}
			if ($_FILES['gallery1']['name']) {
				if (!$this->upload->do_upload('gallery1')) {
		            $error = array('error' => $this->upload->display_errors());
		        } else {
		        	$uploadData = $this->upload->data();
		            $data = array('gallery1' => $this->upload->data());
		            $gallery1 = $uploadData['file_name'];
		        }
			}
			if ($_FILES['gallery2']['name']) {
				if (!$this->upload->do_upload('gallery2')) {
		            $error = array('error' => $this->upload->display_errors());
		        } else {
		        	$uploadData = $this->upload->data();
		            $data = array('gallery2' => $this->upload->data());
		            $gallery2 = $uploadData['file_name'];
		        }
			}
			if ($_FILES['gallery3']['name']) {
				if (!$this->upload->do_upload('gallery3')) {
		            $error = array('error' => $this->upload->display_errors());
		        } else {
		        	$uploadData = $this->upload->data();
		            $data = array('gallery3' => $this->upload->data());
		            $gallery3 = $uploadData['file_name'];
		        }
			}
			
			$data = array('subcategory_id'=>$_REQUEST['subcategory_id'],
						'name'=>$_REQUEST['name'],
						'description'=>$_REQUEST['description'],
						'price'=>$_REQUEST['price'],
						'product_image'=>$product_image,
						'gallery1'=>$gallery1,
						'gallery2'=>$gallery2,
						'gallery3'=>$gallery3);
			$this->db->insert('product',$data);
		}
		$this->load->view('test');
	}
	public function getSingleProductDetails(){
      	echo $this->Home->getSingleProductDetails();     
    }
    public function getRelatedProductDetails(){
      	echo $this->Home->getRelatedProductDetails();     
    }
    
		
}
