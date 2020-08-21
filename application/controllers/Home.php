<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
        parent::__construct();        
        $this->load->model('Home_model');         
   	}
	 
	public function index()
	{
		$this->load->view('website/home');
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
