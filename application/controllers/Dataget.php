<?php
class Dataget extends CI_Controller
{
	var $property_post = 'property_post';
	var $reply_a_request = 'reply_a_request';
	var $request_a_property = 'request_a_property';
	var $user_tb = 'user_tb';
	var $property_category = 'property_category';
	var $property_type = 'property_type';
	var $on_off_edit_del_request = 'on_off_edit_del_request';
	var $agorithm = 'haval160,4';
public function __construct(){
			parent::__construct();
		    $this->load->model('datagetmodel');
		}

public function profileData(){
	if($this->uri->segment(3)){
		$pages = ($this->uri->segment(3));
		$data = $this->datagetmodel->getProfileData($pages);
		print json_encode(array("data"=>$data,"state"=>$this->states(),"country"=>$this->country()));

	}
}

public function getStates(){
	print json_encode(array("state"=>$this->states()));
}

public function getCountry(){
	print json_encode(array("country"=>$this->country()));
}
	
public function states(){
	$states = array('Abia','Adamawa','Akwaibom','Anambra','Bauchi','Bayelsa','Benue','Borno','CrossRiver','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa','Kaduna','Kano','Kastina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara','Abuja','Other');
	return $states;
}	
		

public function country(){
		$country = array('Afghanistan','Albania','Algeria','Andorra','Angola','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cabo Verde','Cambodia','Cameroon','Canada','Central African Republic','Chad','Chile','China','Colombia','Comoros','Congo','Costa Rica','C?te dIvoire','Croatia','Cuba','Cyprus','Czech Republic','Democratic Peoples Republic of Korea North Korea','Democratic Republic of the Cong','Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada','Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Honduras','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Kuwait','Kyrgyzstan','Lao Peoples Democratic Republic Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Mauritania','Mauritius','Mexico','Micronesia Federated States','Monaco','Mongolia','Montenegro','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','New Zealand','Nicaragua','Niger','Nigeria','Norway','Oman','Pakistan','Palau','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Qatar','Republic of Korea South Korea','Republic of Moldova','Romania','Russian Federation','Rwanda','Saint Kitts and Nevis','Saint Lucia','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Sudan','Spain','Sri Lanka','Sudan','Suriname','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Tajikistan','Thailand','Timor-Leste','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom of Great Britain and Northern Ireland','United Republic of Tanzania','United States of America','Uruguay','Uzbekistan','Vanuatu','Venezuela','Vietnam','Yemen','Zambia','Zimbabwe');
		return $country;
}	

public function getAllCategory(){
	$data = $this->datagetmodel->getAllPropertyCategory();
	print json_encode(array("data"=>$data));
}

public function getAllType(){
	$data = $this->datagetmodel->getAllPropertyType();
	print json_encode(array("data"=>$data));
}
	
public function getProperty(){
	if($this->uri->segment(3)){
		$pages = ($this->uri->segment(3));
	}else{
		$pages = 1;
	}
		
		$total_row = $this->datagetmodel->count_all_property();
		$config = array();
		$config["total_rows"] = $total_row;
		if($total_row<6){
			$config["per_page"] = $total_row;
		}else{
			$config["per_page"] = 6;
		}
		$data = $this->datagetmodel->fetch_all_property($config["per_page"],$pages);
		print json_encode(array("data"=>$data));
	
}	

public function getUserRequest(){
	if($this->uri->segment(4)){
		$pages = ($this->uri->segment(4));
	}else{
		$pages = 1;
	}
	$userid = ($this->uri->segment(3));
		
		$total_row = $this->datagetmodel->count_userRequest($userid);
		$config = array();
		$config["total_rows"] = $total_row;
		if($total_row<6){
			$config["per_page"] = $total_row;
		}else{
			$config["per_page"] = 6;
		}
		$data = $this->datagetmodel->fetch_userRequest($config["per_page"],$userid,$pages);
		print json_encode(array("data"=>$data));
	
}
	
	
}
?>