<?php
class Customer_model extends CI_Model {
    private $table = 'customers';
    
    public function rules(){
            return [
                [
                    'field' => 'nama',  
                    'label' => 'nama',  
                    'rules' => 'required' 
                ],
                [
                    'field' => 'no_telpon',  
                    'label' => 'no_telpon',  
                    'rules' => 'required' 
                ],
                [
                    'field' => 'id_sales',  
                    'label' => 'id_sales',  
                    'rules' => 'required' 
                ],
            ];
    }
    public function getAll()
    {
            $this->db->select('customers.id, customers.nama,customers.no_telpon,sales.nama as sales_nama');
                $this->db->from('customers');
                $this->db->join('sales', 'customers.id_sales = sales.id');
                $query = $this->db->get();

            return $query->result();
    }

    public function getById($id){
        $this->db->where('id', $id);
        $this->db->from('customers');
        $query = $this->db->get();
        return $query->row();


    }

    public function save($post)
    {
        
        $data = [
            'id'            => '',
            "nama"          =>   $post['nama'],
            "no_telpon"     => $post['no_telpon'],
            "id_sales"     => $post['id_sales'],
        ];

        $this->db->insert('customers', $data);
        
        
    }

    public function update($post,$id)
    {
        
        $data = [
            "nama"          =>   $post['nama'],
            "no_telpon"     => $post['no_telpon'],
            "id_sales"     => $post['id_sales'],
        ];

        $this->db->where('id',$id);
        $this->db->update('customers', $data);
        
        
    }

    public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('customers');
    }

}