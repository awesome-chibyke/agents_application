<?php
	class Dbmodel extends CI_Model{
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

public function record_count($id) {
	$query = $this->db->where('user_unique_id', $id)->get($this->request_a_property);
	return $query->num_rows();
}		

public function getLogginUserData($SESSION){
	$query = $this->db->get_where($this->user_tb, array('hashed_pot'=>$SESSION));
	return $query->row_array();
}
		
public function getUserSingleData($id,$field){
	$query = $this->db->get_where($this->user_tb, array('unique_id'=>$id));
	$row = $query->row_array();
	return $row[$field];
}		
		
public function getAllPropertyCategory(){
	$query_cat = $this->db->query("SELECT * FROM $this->property_category");
	return $query_cat->result_array();
}

public function getAllPropertyType(){
	$query_type = $this->db->query("SELECT * FROM $this->property_type");
	return $query_type->result_array();
}
/*count property by type*/
public function count_type_by_cat($cat,$type){
	$this->db->where('property_category', $cat);
	$this->db->where('property_type', $type);
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}		
/*Users Request*/		
public function getAllUserRequestProperty($id){
	$query_request = $this->db->get_where($this->request_a_property, array('user_unique_id'=>$id));
	return $query_request->result_array();
}		

public function on_of_request_edit_del(){
	$this->db->limit(1);
	$query = $this->db->get($this->on_off_edit_del_request);
	$data = $query->row_array();
	return $data;
}
		
// Fetch property data according to per_page limit. For users
public function countUserPostProperty($id) {
	$this->db->where('whois_unique_id', $id);
	$this->db->where("property_type !=", "Land");
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}

public function countUserPostLand($id) {
	$this->db->where('whois_unique_id', $id);
	$this->db->where("property_type =", "Land");
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}
		
public function fetch_data($limit, $id, $start) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where('user_unique_id', $id);
	$this->db->order_by("id", "desc");
	$query = $this->db->get($this->request_a_property);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}
		
public function getRequest($uid, $id){
	$query = $this->db->get_where($this->request_a_property, array('user_unique_id'=>$uid, 'id'=>$id));
	$data = $query->row_array();
	return $data;
}
		
public function getProperty($uid, $id){
	$query = $this->db->get_where($this->property_post, array('whois_unique_id'=>$uid, 'unique_id'=>$id));
	$data = $query->row_array();
	return $data;
}

public function countMultiImages($id){
	$query = $this->db->get_where($this->property_post, array('unique_id'=>$id));
	$data = $query->row_array();
	return $data;
}

public function getMultiImages($id){
	$query = $this->db->get_where($this->property_post, array('unique_id'=>$id));
	$data = $query->row_array();
	return $data;
}

/*Individual*/
public function count_property($id) {
	$query = $this->db->where('whois_unique_id', $id)->get($this->property_post);
	return $query->num_rows();
}

public function count_property_cat($id,$cat) {
	$cat = str_replace("-"," ",$cat);
	$this->db->where('whois_unique_id', $id);
	$this->db->where('property_category', $cat);
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}
		
public function fetch_property_data($perPage, $id, $start,$total_row) {
	/*if($total_row==(($start-1)*$perPage)+1){
		$offset = (($start-1)*$perPage)-1;
	}else{*/
    $offset = ($start-1)*$perPage;
	//}
	$this->db->limit($perPage,$offset);
	$this->db->where('whois_unique_id', $id);
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}

public function fetch_property_data_type($limit, $id, $start,$cat,$total_row) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where('whois_unique_id', $id);
	$cat = str_replace("-"," ",$cat);
	$this->db->where('property_category', $cat);
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}

public function fetch_property_data_buildings() {
	$this->db->limit(3);
	$this->db->where("property_type !=", "Land");
	$this->db->where("property_status !=", "Taken");
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}
	
public function fetch_property_data_lands() {
	$this->db->limit(3);
	$this->db->where("property_type =", "Land");
	$this->db->where("property_status !=", "Taken");
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}
		
/*ALL*/
public function count_all_property($cat) {
	$query = $this->db->where('property_category', $cat)->get($this->property_post);
	return $query->num_rows();
}	

public function fetch_all_property($limit,$start,$cat,$total_row) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$cat = str_replace("-"," ",$cat);
	$this->db->where('property_category', $cat);
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}		

/*Property cat with type*/
public function count_all_property_with_type($cat,$type) {
	$this->db->where('property_category', $cat);
	$this->db->where('property_type', $type);
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}
		
public function fetch_all_property_with_type($limit,$start,$cat,$type,$total_row) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$cat = str_replace("-"," ",$cat);
	$type = str_replace("-"," ",$type);
	$this->db->where('property_category', $cat);
	$this->db->where('property_type', $type);
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}		

		
/*Property State*/
public function count_all_property_state($state) {
	$this->db->where('property_city', $state);
	$query = $this->db->get($this->property_post);
	return $query->num_rows();
}
		
public function fetch_all_property_in_state($limit,$start,$state,$total_row) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where('property_city', $state);
	$this->db->order_by("subscription desc, id desc");
	$query = $this->db->get($this->property_post);
	if ($query->num_rows() > 0) {
		$data = $query->result_array();
		return $data;
	}else{
	 return 0;	
	}
}

/*CHECK IF EXIST OF SAVED PROPERTY*/		
public function check_if_saved_property_exist($uid,$pid) {
	$this->db->where('user_unique_id', $uid);
	$this->db->where('property_unique_id', $pid);
	$query = $this->db->get($this->my_saved_property);
	return $query->num_rows();
}		

/*COunt Saved Property*/		
public function count_all_saved_property($uid) {
	$this->db->where('user_unique_id', $uid);
	$query = $this->db->get($this->my_saved_property);
	return $query->num_rows();
}
		
public function fetch_all_saved_property($limit,$start,$uid,$total_row) {
	$offset = ($start-1)*$limit;
	$this->db->limit($limit,$offset);
	$this->db->where('user_unique_id', $uid);
	$query = $this->db->get($this->my_saved_property);
	if($query->num_rows() > 0) {
		$data = $query->result_array();
		$getID = array();
		for($i=0; $i<count($data); $i++){
			$query_cat =  $this->db->query("SELECT * FROM $this->property_post WHERE `unique_id`='".$data[$i]['property_unique_id']."'");
		    $getID[] = $query_cat->result_array();
		}
		return $getID;
	}else{
	 return 0;	
	}
}	

public function get_single_post_data($postId){
	$query = $this->db->get_where($this->property_post, array('id'=>$postId));
	return $query->row_array();
}
		
public function get_agents_info_data($agentId){
	$query = $this->db->get_where($this->user_tb, array('unique_id'=>$agentId));
	return $query->row_array();
}		
		
}
?>