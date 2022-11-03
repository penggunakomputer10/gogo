<?php
class Sales_model extends CI_Model {

public function rules(){
        return [
                [
                'field' => 'nama',  
                'label' => 'nama',  
                'rules' => 'required' 
                ],
        ];

}

    public function getAll()
    {
            $query = $this->db->get('sales');
            return $query->result();
    }

  public function save($post){
        $data = [
                'id'            => '',
                "nama"          =>   $post['nama'],
            ];
            
        $this->db->insert('sales', $data);
  }

  public function delete($id){
        $this->db->where('id', $id);
        $this->db->delete('sales');
  }

  public function getById($id){
        $this->db->where('id', $id);
        $this->db->from('sales');
        $query = $this->db->get();
        return $query->row();


    }

    public function update($post,$id){
        $data = [
                "nama"          =>   $post['nama'],
            ];
        $this->db->where('id',$id);
        $this->db->update('sales', $data);
  }

}