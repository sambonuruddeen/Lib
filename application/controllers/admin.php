<?php
class Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
        $this->load->model('admin_model');
        
        $this->load->helper('form');
        $this->load->library('form_validation');
      
    }
    
    public function index() {
        $this->load->view('inc/header_view');
        $this->load->view('admin/dashboard');
        $this->load->view('inc/footer_view');
    }
    public function dashboard() {
        
         $this->form_validation->set_rules('title','Book Title','trim|ucfirst|required');
         $this->form_validation->set_rules('author','Author','trim|ucfirst|required');
         $this->form_validation->set_rules('isnb','ISBN','trim|ucfirst');
         $this->form_validation->set_rules('keywords','Description','trim|ucfirst|required');
         
                        
          if ($this->form_validation->run() === FALSE)
    {       
        $this->load->view('inc/header_view');
        $this->load->view('admin/dashboard');
        $this->load->view('inc/footer_view');
    }
    
     else {
     //$data['insert'] = $this->admin_model->upload_book();
     
                $config['upload_path']          = 'public/uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['filename']             = 'lop.pdf';
                
                
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('book'))
                {
                $data = array('upload_data' => $this->upload->data());
        print_r($data);         
                echo "invalid";
                }
                else
                {
          //         $data = array('upload_data' => $this->upload->data());
        //print_r($data);  
                    $this->session->set_flashdata('uploadSuccess', 'File Upload Successful');
                }
       
        /*$this->load->view('inc/header_view');
        $this->load->view('admin/dashboard');
        $this->load->view('inc/footer_view');*/
    }
    }
}
