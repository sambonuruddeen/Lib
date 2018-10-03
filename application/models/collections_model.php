<?php
class Collections_model extends CI_Model {
	
		public function __construct(){
			parent:: __construct();
		}

		public function get_faculty($faculty_id) {

			$this->db->where('faculty_id', $faculty_id);
			$query = $this->db->get('faculties');

			$name = $query->row();
			return $name->faculty;
		}

		public function dept_name($dept_id) {
			$this->db->where('dept_id', $dept_id);
			$query = $this->db->get('departments');
			
			$name = $query->row();
			return $name->department;
		}

		public function get_depts($faculty_id){
		
		$this->db->order_by('department', 'ASC');
		$this->db->where('faculty_id', $faculty_id);
		$query = $this->db->get('departments');
		return $query->result_array();
}

public function dept_collection($dept_id, $category_id){
		
		$this->db->where('department', $dept_id);
		$this->db->where('category_id', $category_id);
		$query = $this->db->get('collections');
		return $query->num_rows();
	}

public function categories(){

	$this->db->order_by('category');
	$query = $this->db->get('collection_category');
	return $query->result_array();
}

public function collections($category_id) {

	$this->db->where('category_id', $category_id);
	$query = $this->db->get('collections');
	return $query->result_array();
}

public function quick_search(){
	 $search = $this->input->post('topsearch');

	$this->db->like('title',$search);
	$this->db->or_like('author',$search);
	$this->db->or_like('keywords',$search);
	$this->db->or_like('department',$search);
	$this->db->or_like('faculty',$search);

	$query = $this->db->get('collections');

	return $query->result_array();
}

}