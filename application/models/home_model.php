<?php 
class Home_model extends CI_Model {
	public function __construct() {
	 parent::__construct();
	}

	public function get_faculties() {
		$this->db->order_by('faculty', 'ASC');
      $query =  $this->db->get('faculties');
       return $query->result_array();  
	}

	
	public function get_depts($faculty_id){
		$this->db->limit(4);
		$this->db->order_by('department', 'ASC');
		$this->db->where('faculty_id', $faculty_id);
		$query = $this->db->get('departments');
		return $query->result_array();
}

	public function colletion_count($faculty_id, $category_id){
		
		$this->db->where('faculty', $faculty_id);
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('collections');
		return $query->num_rows();
	}
}