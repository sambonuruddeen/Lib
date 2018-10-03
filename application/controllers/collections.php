<?php
class Collections extends CI_Controller {
	
	public function __construct() {
		parent::__construct();

		$this->load->model('collections_model');
		$this->load->helper('form');
        $this->load->library('form_validation');
	}

	public function index($faculty_id){
		
		$this->load->helper('inflector');

			$data['faculty_name'] = $this->collections_model->get_faculty($faculty_id);
			$data['departments'] = $this->collections_model->get_depts($faculty_id);
			$data['categories'] = $this->collections_model->categories();

		$this->load->view('inc/header_view');
		$this->load->view('collections/home', $data);
		$this->load->view('inc/footer_view');
	}

	public function dept_collections($faculty_name, $department, $category) {
			$this->load->helper('inflector');
		

		$data['faculty_name'] = $faculty_name;
		$data['department'] = $this->collections_model->dept_name($department);
		$data['categories'] = $this->collections_model->categories();
		$data['collections'] = $this->collections_model->collections($category);

		$this->load->view('inc/header_view');
		$this->load->view('collections/dept_collections', $data);
		$this->load->view('inc/footer_view');
	}

	public function download($id) {
	
			$this->load->helper('download');

		$data = file_get_contents(base_url().'public/uploads/'.$id.".pdf");
		$name = md5($id).'.pdf';
			force_download($name, $data);
	}

	public function quick_search() {

		$this->form_validation->set_rules('topsearch','Search Key Word','trim|required');
 if ($this->form_validation->run() === FALSE)
    {      }

		$data['search_result'] = $this->collections_model->quick_search();
		$data['search_query'] = $this->input->post('topsearch');
		$this->load->view('inc/header_view');
		$this->load->view('collections/quick_search',$data);
		$this->load->view('inc/footer_view');
	}
}