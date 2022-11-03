<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {
	public function __construct() {
		parent::__construct();  
		$this->load->model('Customer_model');
		$this->load->model('Sales_model');
        

	}

	public function index(){

		$data['customers'] = $this->Customer_model->getAll();

        
		$this->load->view('layout/header');
		$this->load->view('customer/index',$data);
		$this->load->view('layout/footer');
	}

	public function add(){
		$data['sales'] = $this->Sales_model->getAll();
        $Customer = $this->Customer_model;
        $validation = $this->form_validation; 
        $validation->set_rules($this->Customer_model->rules());
        if ($validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('customer/add',$data);
            $this->load->view('layout/footer');
        }else{
            $action = $this->Customer_model->save($this->input->post());

            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("customer");
        }
		
	}

	public function delete($id){
		$action = $this->Customer_model->delete($id);

		$this->session->set_flashdata('success', 'Berhasil hapus data');
		redirect("customer");
	}

	public function edit($id){
		$data['sales'] = $this->Sales_model->getAll();
		$data['customer'] = $this->Customer_model->getById($id);
		

        $Customer = $this->Customer_model;
        $validation = $this->form_validation; 
        $validation->set_rules($this->Customer_model->rules());
        if ($validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('customer/edit',$data);
            $this->load->view('layout/footer');
        }else{
            $action = $this->Customer_model->update($this->input->post(),$id);

            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect("customer");
        }
		
	}
}
