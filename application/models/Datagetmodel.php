<?php
class Datagetmodel extends CI_Model{
	var $property_post = 'property_post';
	var $reply_a_request = 'reply_a_request';
	var $request_a_property = 'request_a_property';
	var $user_tb = 'user_tb';
	var $property_category = 'property_category';
	var $property_type = 'property_type';
	var $on_off_edit_del_request = 'on_off_edit_del_request';
	var $my_saved_property = 'my_saved_property';
public function __construct() {
			parent::__construct();
}
	
public function getAllPropertyCategory(){
	$query_cat = $this->db->query("SELECT * FROM $this->property_category");
	return $query_cat->result_array();
}

public function getAllPropertyType(){
	$query_type = $this->db->query("SELECT * FROM $this->property_type");
	return $query_type->result_array();
}	

public function count_all_property(){
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}	
	
public function getProfileData($id){
	$query = $this->db->where('unique_id', $id)->get($this->user_tb);
	$data = $query->row_array();
	return $data;
}
		
public function fetch_all_property($limit,$start) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where("property_status !=", "Taken");
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}
}

public function count_userRequest($id) {
	$query = $this->db->where('user_unique_id', $id)->get($this->request_a_property);
	return $query->num_rows();
}
	
public function fetch_userRequest($limit, $id, $start) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where('user_unique_id', $id);
	$this->db->order_by("id", "desc");
	$query = $this->db->get($this->request_a_property);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return false;	
	}
}	
		
}
?>