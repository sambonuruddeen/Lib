<?php
 class Home extends CI_Controller {
     
     public function __construct() {
         parent::__construct();
         
         
     }
     
     public function index() {
         $this->load->view('inc/header_view');
         $this->load->view('home/index');
         $this->load->view('inc/footer_view');
     }
     
     public function login() {
        /* IMPORTANT - validate LOGIN  */
         $this->load->model('login_model');
         
         $this->load->library('form_validation');
         $this->form_validation->set_rules('email', 'E-mail', 'required');
         $this->form_validation->set_rules('password', 'Password', 'required');

         
         if ($this->form_validation->run() == FALSE) {
             
            
         $this->load->view('inc/header_view');
         $this->load->view('home/login_view');
         $this->load->view('inc/footer_view');
            } 
            else {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $data = $this->login_model->login($email,$password);
        
     
            if($this->session->userdata('user_id')> 0) {
                /*
                 * Before redirect check access level
                 */
           redirect('admin/dashboard', 'refresh');
       }
               
            }
        $this->load->view('inc/header_view');
        $this->load->view('home/login_view');
        $this->load->view('inc/footer_view');
         
     }
 }