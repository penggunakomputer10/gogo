<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct() {
		parent::__construct();  
		$this->load->model('Customer_model');
		$this->load->model('Sales_model');
        

	}

	public function index(){

		$data['customers'] = $this->Customer_model->getAll();

        
		$this->load->view('layout/header');
		$this->load->view('home/index',$data);
		$this->load->view('layout/footer');
	}

	
}
