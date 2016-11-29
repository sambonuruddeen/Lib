<?php
class Collections extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
	}

	public function index(){

		$this->load->view('inc/header_view');
		$this->load->view('collections/home');
		$this->load->view('inc/footer_view');
	}
}