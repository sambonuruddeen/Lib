<?php

class Login_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
           
    }
    
    public function login($email, $password) {
        
        $this->db->select('user_id,surname,firstname');
        $this->db->where('email',$email);
        $this->db->where('password',$password);
        $this->db->where('access_level','1');
        $query = $this->db->get('login');
       if($query->num_rows() > 0) {
           
           $rows = $query->row();
           $this->session->set_userdata('user_id', $rows->user_id);
           $this->session->set_userdata('username', $rows->firstname." ".$rows->surname);
                     
       }
 else { $this->session->set_flashdata('loginError', 'Invalid Email or Password');   }
        
       
    }
    
    
}
