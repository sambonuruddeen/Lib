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
    $data['faculties'] = $this->admin_model->get_faculty(); 
    $data['category'] = $this->admin_model->get_cat(); 

        $this->load->view('inc/header_view');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('inc/footer_view');
    }
    
     else {
     
                $data['insert'] = $this->admin_model->upload_book();
                $newName = $data['insert'];
                $config['upload_path']          = 'public/uploads/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 0;
                $config['max_width']            = 0;
                $config['max_height']           = 0;
                $config['file_name']             = $newName.'.pdf';
                
                
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('book'))
                {
                       
                $this->session->set_flashdata('uploadError', 'Invalid file/Upload Failure');
                }
                else
                {
                    
                    $this->session->set_flashdata('uploadSuccess', 'File Upload Successful');
                }
        $data['faculties'] = $this->admin_model->get_faculty(); 
        $data['category'] = $this->admin_model->get_cat(); 

        $this->load->view('inc/header_view');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('inc/footer_view');
    }
    }

    /* Retrieve Departments to display on th form */
    public function dept() {
               
    $data['dept'] = $this->admin_model->get_department($this->input->get('faculty_id'));
    $this->load->view('admin/dept', $data);
       }
}
