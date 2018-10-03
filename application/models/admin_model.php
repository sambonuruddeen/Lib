<?php

class Admin_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
           
    }
    
    public function upload_book() {
        
        $data = array(
           'faculty' => $this->input->post('faculty'), 
           'department' => $this->input->post('department'),
           'category_id' => $this->input->post('category'), 
           'title' => $this->input->post('title'), 
           'author' => $this->input->post('author'), 
           'isbn' => $this->input->post('isbn'), 
           'keywords' => $this->input->post('keywords') 
        );
        
        $query = $this->db->insert('collections', $data);
        $new_id = $this->db->insert_id();
    
       if($new_id > 0) {
           
           $this->session->set_flashdata('uploadSuccees', 'Upload Successful');        
       }
 else { $this->session->set_flashdata('uploadError', 'Upload Failure');   }
        
       //Return the ID of the upload
        return $new_id;  
    }
    
    public function get_cat() {
      $this->db->order_by('category', 'ASC');
      $query =  $this->db->get('collection_category');
       return $query->result_array();  
    }

    public function get_faculty() {
      $this->db->order_by('faculty', 'ASC');
      $query =  $this->db->get('faculties');
       return $query->result_array();  
    }
    public function get_department($faculty_id) {
      $this->db->where('faculty_id', $faculty_id);
      $this->db->order_by('department', 'ASC');
      $query =  $this->db->get('departments');
       return $query->result_array();  
    }
    
}
