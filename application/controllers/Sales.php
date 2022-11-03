<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sales extends CI_Controller {
	public function __construct() {
		parent::__construct();  
		$this->load->model('Sales_model');
        

	}

	public function index(){

		$data['sales'] = $this->Sales_model->getAll();

        
		$this->load->view('layout/header');
		$this->load->view('sales/index',$data);
		$this->load->view('layout/footer');
	}


    public function add(){

        $this->form_validation->set_rules($this->Sales_model->rules());
        if ($this->form_validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('sales/add');
            $this->load->view('layout/footer');
        }else{
            $action = $this->Sales_model->save($this->input->post());

            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect("sales");
        }
		
	}
    public function delete($id){
		$action = $this->Sales_model->delete($id);

		$this->session->set_flashdata('success', 'Berhasil hapus data');
		redirect("sales");
	}

    public function edit($id){
		$data['sales'] = $this->Sales_model->getById($id);
		

        $this->form_validation->set_rules($this->Sales_model->rules());
        if ($this->form_validation->run() == false) {
            
            $this->load->view('layout/header');
            $this->load->view('sales/edit',$data);
            $this->load->view('layout/footer');
        }else{
            $action = $this->Sales_model->update($this->input->post(),$id);

            $this->session->set_flashdata('success', 'Berhasil diupdate');
            redirect("sales");
        }
		
	}
	
}
