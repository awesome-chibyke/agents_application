<?php
class Pages extends CI_Controller{
	var $property_post = 'property_post';
	var $reply_a_request = 'reply_a_request';
	var $request_a_property = 'request_a_property';
	var $user_tb = 'user_tb';
	var $property_category = 'property_category';
	var $property_type = 'property_type';
	var $on_off_edit_del_request = 'on_off_edit_del_request';
public function __construct(){
			parent::__construct();
			$this->load->model('dbmodel');
	        $this->load->library('pagination');
	        if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
				$_SESSION['logger'] = $_COOKIE['uba_text'];
			}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
				$_SESSION['logger'] = $_SESSION['uba_text'];
			}
}

public function siteInfo(){
	$siteInfo = array("siteName"=>"My Property Ng.","siteEmail1"=>"contact@mypropertyng.com","siteEmail2"=>"contact@mypropertyng.com","sitePhone1"=>"+234-8938-726-351","sitePhone2"=>"","whatsappNum"=>"+234-8938-726-351","domain1"=>"mypropertyng.com","domain2"=>"www.mypropertyng.com","address"=>"3 Kenyatta Street Block S3 & S4 Afpet Plaza Uwani, Enugu.");
	return($siteInfo);
}
	
public function reduce_text_lent($content, $length){
				if(strlen($content) < $length){
                        return $content;  
                     }else if(strlen($content) > $length){
                           return substr($content, 0, $length).'.<span style="color: #EDDEDA;">..</span>';
						   		}
			}	
	
public function states(){
	$states = array('Abia','Adamawa','Akwaibom','Anambra','Bauchi','Bayelsa','Benue','Borno','CrossRiver','Delta','Ebonyi','Edo','Ekiti','Enugu','Gombe','Imo','Jigawa','Kaduna','Kano','Kastina','Kebbi','Kogi','Kwara','Lagos','Nasarawa','Niger','Ogun','Ondo','Osun','Oyo','Plateau','Rivers','Sokoto','Taraba','Yobe','Zamfara','Abuja','Other'  );
	return $states;
}

public function country(){
		$country = array('Afghanistan','Albania','Algeria','Andorra','Angola','Antigua and Barbuda','Argentina','Armenia','Australia','Austria','Azerbaijan','Bahamas','Bahrain','Bangladesh','Barbados','Belarus','Belgium','Belize','Benin','Bhutan','Bolivia','Bosnia and Herzegovina','Botswana','Brazil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Cabo Verde','Cambodia','Cameroon','Canada','Central African Republic','Chad','Chile','China','Colombia','Comoros','Congo','Costa Rica','C?te dIvoire','Croatia','Cuba','Cyprus','Czech Republic','Democratic Peoples Republic of Korea North Korea','Democratic Republic of the Cong','Denmark','Djibouti','Dominica','Dominican Republic','Ecuador','Egypt','El Salvador','Equatorial Guinea','Eritrea','Estonia','Ethiopia','Fiji','Finland','France','Gabon','Gambia','Georgia','Germany','Ghana','Greece','Grenada','Guatemala','Guinea','Guinea-Bissau','Guyana','Haiti','Honduras','Hungary','Iceland','India','Indonesia','Iran','Iraq','Ireland','Israel','Italy','Jamaica','Japan','Jordan','Kazakhstan','Kenya','Kiribati','Kuwait','Kyrgyzstan','Lao Peoples Democratic Republic Laos','Latvia','Lebanon','Lesotho','Liberia','Libya','Liechtenstein','Lithuania','Luxembourg','Macedonia','Madagascar','Malawi','Malaysia','Maldives','Mali','Malta','Marshall Islands','Mauritania','Mauritius','Mexico','Micronesia Federated States','Monaco','Mongolia','Montenegro','Morocco','Mozambique','Myanmar','Namibia','Nauru','Nepal','Netherlands','New Zealand','Nicaragua','Niger','Nigeria','Norway','Oman','Pakistan','Palau','Panama','Papua New Guinea','Paraguay','Peru','Philippines','Poland','Portugal','Qatar','Republic of Korea South Korea','Republic of Moldova','Romania','Russian Federation','Rwanda','Saint Kitts and Nevis','Saint Lucia','Saint Vincent and the Grenadines','Samoa','San Marino','Sao Tome and Principe','Saudi Arabia','Senegal','Serbia','Seychelles','Sierra Leone','Singapore','Slovakia','Slovenia','Solomon Islands','Somalia','South Africa','South Sudan','Spain','Sri Lanka','Sudan','Suriname','Swaziland','Sweden','Switzerland','Syrian Arab Republic','Tajikistan','Thailand','Timor-Leste','Togo','Tonga','Trinidad and Tobago','Tunisia','Turkey','Turkmenistan','Tuvalu','Uganda','Ukraine','United Arab Emirates','United Kingdom of Great Britain and Northern Ireland','United Republic of Tanzania','United States of America','Uruguay','Uzbekistan','Vanuatu','Venezuela','Vietnam','Yemen','Zambia','Zimbabwe');
		return $country;
}
public function show_404($page){
	$data['checkLogin'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					$_SESSION['logger'] = $_COOKIE['uba_text'];
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					$_SESSION['logger'] = $_SESSION['uba_text'];
				}
			};
			
			$data['checkLoginOut'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					redirect(base_url());
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					redirect(base_url());
				}
			};
			$data['reduce_text_lent'] = function($content, $length){
				if(strlen($content) < $length){
                        return $content;  
                     }else if(strlen($content) > $length){
                           return substr($content, 0, $length).'.<span style="color: #EDDEDA;">..</span>';
						   		}
			};
	        $data['siteInfo'] = $this->siteInfo();
	
			$data['user_data'] = $this->dbmodel->getLogginUserData($_SESSION['logger']);
			
			$data['request_data'] = $this->dbmodel->getAllUserRequestProperty($data['user_data']['unique_id']);
			
			$data['category'] = $this->dbmodel->getAllPropertyCategory();
			
			$data['type'] = $this->dbmodel->getAllPropertyType();
	
			$data['title'] = 'Error 404: '.$page.'.php Not Found!';
			$this->load->helper('url');
			$this->load->view('pages/header',$data);
			$this->load->view('pages/404',$data);
			$this->load->view('pages/footer');
}
	
public function view( $page = 'home'){
		if(!file_exists('application/views/pages/'.$page.'.php')){
			$this->show_404($page);
		}else{
			$data['country'] = $this->country();
			$data['states'] = $this->states();
			$data['siteInfo'] = $this->siteInfo();
			$data['checkLogin'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					$_SESSION['logger'] = $_COOKIE['uba_text'];
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					$_SESSION['logger'] = $_SESSION['uba_text'];
				}
			};
			
			$data['checkLoginOut'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					redirect(base_url());
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					redirect(base_url());
				}
			};
			$data['reduce_text_lent'] = function($content, $length){
				if(strlen($content) < $length){
                        return $content;  
                     }else if(strlen($content) > $length){
                           return substr($content, 0, $length).'.<span style="color: #EDDEDA;">..</span>';
						   		}
			};
			
			$data['user_data'] = $this->dbmodel->getLogginUserData(@$_SESSION['logger']);
			
			$data['request_data'] = $this->dbmodel->getAllUserRequestProperty($data['user_data']['unique_id']);
			
			$data['category'] = $this->dbmodel->getAllPropertyCategory();
			
			$data['type'] = $this->dbmodel->getAllPropertyType();
			
			$data['count_post_properties'] = $this->dbmodel->countUserPostProperty($data['user_data']['unique_id']);
			
			$data['count_post_land'] = $this->dbmodel->countUserPostLand($data['user_data']['unique_id']);
			
			if ($page == 'home') {
				$data['title'] = 'My Property NG.';
				$data['activa1'] = 'activa';
				$data["property_data"] = $this->dbmodel->fetch_property_data_buildings();
				$data["property_data_land"] = $this->dbmodel->fetch_property_data_lands();
			}
			if ($page == 'about'){
				$data['title'] = 'About | My Property NG.';
				$data['activa9'] = 'activa';
			}
			if ($page == 'agents-register'){
				$data['title'] = 'My Property NG.';
				$data['activa7'] = 'activa';
			}
			if ($page == 'agents') {
				$data['title'] = 'My Property NG.';
				$data['activa4'] = 'activa';
			}
			if ($page == 'contact-us') {
				$data['title'] = 'My Property NG.';
				$data['activa6'] = 'activa';
			}
			if ($page == 'detailed') {
				$data['title'] = 'My Property NG.';
				$data['activa2'] = 'activa';
			}
			if ($page == 'locations') {
				$data['title'] = 'My Property NG.';
				$data['activa3'] = 'activa';
			}
			if ($page == 'login') {
				$data['title'] = 'My Property NG.';
				$data['activa8'] = 'activa';
			}
			if ($page == 'make-request') {
				$data['title'] = 'My Property NG.';
				$data['activa5'] = 'activa';
			}
			if ($page == 'properties') {
				$data['title'] = 'My Property NG.';
				$data['activa2'] = 'activa';
			}
			if ($page == 'register-option') {
				$data['title'] = 'My Property NG.';
				$data['activa7'] = 'activa';
			}
			if ($page == 'user-register') {
				$data['title'] = 'My Property NG.';
				$data['activa7'] = 'activa';
			}
			$this->load->helper('url');
			$this->load->view('pages/header',$data);
			$this->load->view('pages/'.$page,$data);
			$this->load->view('pages/footer',$data);
		}
	}
	

public function dashboard( $page = 'home'){
		if(!file_exists('application/views/pages/users/'.$page.'.php')){
			$this->show_404($page);
		}else{
			$data['siteInfo'] = $this->siteInfo();
			$data['country'] = $this->country();
			$data['states'] = $this->states();
			$data['checkLogin'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					@$_SESSION['logger'] = $_COOKIE['uba_text'];
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					@$_SESSION['logger'] = $_SESSION['uba_text'];
				}
			};
			
			$data['checkLoginOut'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					redirect(base_url());
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					redirect(base_url());
				}
			};
			
			$data['authenticate_user'] = function(){
				if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){

				}else{
					redirect(base_url().'auth/endsession');
				}
			};
			
		    $data['user_data'] = $this->dbmodel->getLogginUserData($_SESSION['logger']);
			
			$data['request_data'] = $this->dbmodel->getAllUserRequestProperty($data['user_data']['unique_id']);
			
			$data['category'] = $this->dbmodel->getAllPropertyCategory();
			
			$data['type'] = $this->dbmodel->getAllPropertyType();
			
			$data['count_post_properties'] = $this->dbmodel->countUserPostProperty($data['user_data']['unique_id']);
			
			$data['count_post_land'] = $this->dbmodel->countUserPostLand($data['user_data']['unique_id']);
			
			if ($page == 'home') {
				$data['title'] = 'Members Area | My Property NG. ';
				$data['activa10'] = 'activa';
				$data['activaa'] = 'activa';
			}
			if ($page == 'my-profile') {
				$data['title'] = 'My Profile | My Property NG. ';
				$data['activa11'] = 'activa';
				$data['activaa'] = 'activa';
			}
			if ($page == 'change-password') {
				$data['title'] = 'Change Password | My Property NG. ';
				$data['activa12'] = 'activa';
				$data['activaa'] = 'activa';
			}
			if ($page == 'make-request') {
				$data['title'] = 'Make Request | My Property NG. ';
				$data['activa13'] = 'activa';
				$data['activaa'] = 'activa';
				$data['property_currency'] = '';
			}
			if ($page == 'add-property' || $page == 'add-property-image' || $page == 'add-property-done') {
				$data['title'] = 'Add Property | My Property NG. ';
				$data['activa16'] = 'activa';
				$data['activaa'] = 'activa';
				$data['purpose'] ='';
				$data['property_status'] = '';
				$data['property_currency'] = '';
				$data['payment_mood'] = '';
				$data['apartment_stnd'] = '';
				if($this->uri->segment(4)){
					$pages = ($this->uri->segment(4));
					$data['id'] = $pages;
				}
				else{
					$pages = 1;
				}
				$lop = '';
				$ary = array();
				$data["property_data"] = $this->dbmodel->getProperty($data['user_data']['unique_id'], $pages);
				$data["property_img"] = $this->dbmodel->countMultiImages($pages);
				$getImg = explode(",", $data["property_img"]['property_images']);
				  $cot = count($getImg)-1;
				  for($i=0;$i<$cot;$i++){
					  $ary[] = $getImg[$i]; 
					 $lop .= '<div class="col-lg-3">
							   <div class="inner-cover">
								 <span class="tag-images"><input  type="checkbox" id="del_mult" name="del_mult" value="'.$getImg[$i].'"></span>
								 <img id="pp" class="" src="'.base_url().'property_upload/'.$getImg[$i].'">
							 </div>
							</div>'; 
				  }
			    $data['multi_image'] = $lop;
				$data['as'] = $ary;
			}
			$data['reduce_text_lent'] = function($content, $length){
				if(strlen($content) < $length){
                        return $content;  
                     }else if(strlen($content) > $length){
                           return substr($content, 0, $length).'.<span style="color: #EDDEDA;">..</span>';
						   		}
			};
			if ($page == 'property-listing') {
				$data['title'] = 'Property Listing | My Property NG. ';
				$data['activa17'] = 'activa';
				$data['activaa'] = 'activa';
				$data['purpose'] ='';
				$data['property_status'] = '';
				$data['payment_mood'] = '';
				$config = array();
				$cat = ($this->uri->segment(4));
				$config["base_url"] = base_url()."pages/dashboard/property-listing/".$cat;
				if($cat=='All'){
					 $total_row = $this->dbmodel->count_property($data['user_data']['unique_id']);
				}else{
					 $total_row = $this->dbmodel->count_property_cat($data['user_data']['unique_id'],$cat);
				}
				$p = ($this->uri->segment(5));
				$config["total_rows"] = $total_row;
			    $config["per_page"] = 20;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row/$config["per_page"];
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				$this->pagination->initialize($config);
				if($this->uri->segment(5)){
					$pages = ($this->uri->segment(5));
				}else{
					$pages = 1;
				}
				//print $offset = ($pages-1)*$config["per_page"];
				//print $config["per_page"];
				$data['cat_set'] = $cat;
				if($cat=='All'){
					$data["property_data"] = $this->dbmodel->fetch_property_data($config["per_page"], $data['user_data']['unique_id'],$pages,$total_row);
				}else{
					$data["property_data"] = $this->dbmodel->fetch_property_data_type($config["per_page"], $data['user_data']['unique_id'],$pages,$cat,$total_row);
				}
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
			}
			$this->load->helper('url');
			$this->load->view('pages/header',$data);
			$this->load->view('pages/users/'.$page,$data);
			$this->load->view('pages/footer',$data);
			if($page=='my-profile'){
				$this->load->view('pages/cropie-passport');	
			}else if($page=='add-property-image'){
				$this->load->view('pages/cropie-thumbnail');	
			}
		}
}


	
public function properties( $page = 'property'){
		if(!file_exists('application/views/pages/users/'.$page.'.php')){
			$this->show_404($page);
		}else{
			$data['siteInfo'] = $this->siteInfo();
			$data['country'] = $this->country();
			$data['states'] = $this->states();
			$data['checkLogin'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					@$_SESSION['logger'] = $_COOKIE['uba_text'];
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					@$_SESSION['logger'] = $_SESSION['uba_text'];
				}
			};
			
			$data['checkLoginOut'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					redirect(base_url());
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					redirect(base_url());
				}
			};
			
			$data['authenticate_user'] = function(){
				if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){

				}else{
					redirect(base_url().'auth/endsession');
				}
			};
			
		    $data['user_data'] = $this->dbmodel->getLogginUserData(@$_SESSION['logger']);
			
			$data['request_data'] = $this->dbmodel->getAllUserRequestProperty($data['user_data']['unique_id']);
			
			$data['category'] = $this->dbmodel->getAllPropertyCategory();
			
			$data['type'] = $this->dbmodel->getAllPropertyType();
			
			$data['count_post_properties'] = $this->dbmodel->countUserPostProperty($data['user_data']['unique_id']);
			
			$data['count_post_land'] = $this->dbmodel->countUserPostLand($data['user_data']['unique_id']);
			
			$data['get_type_by_cat'] = function($cat,$type){
				$data = $this->dbmodel->count_type_by_cat($cat,$type);
				return $data;
			};
			
			$data['reduce_text_lent'] = function($content, $length){
				if(strlen($content) < $length){
                        return $content;  
                     }else if(strlen($content) > $length){
                           return substr($content, 0, $length).'.<span style="color: #EDDEDA;">..</span>';
						   		}
			};
			if ($page == 'property') {
				$data['activa2'] = 'activa';
				//$data['activaa'] = 'activa';
				$data['purpose'] ='';
				$data['property_status'] = '';
				$data['payment_mood'] = '';
				$config = array();
				$cat = str_replace("-"," ",$this->uri->segment(4));
				$data['cat'] = $cat;
				$data['title'] = 'Property '.$cat.' | My Property NG. ';
				$config["base_url"] = base_url()."pages/properties/property/".$this->uri->segment(4);
				$total_row = $this->dbmodel->count_all_property($cat);
				$data['total_row'] = $total_row;
				
				$p = ($this->uri->segment(5));
				$config["total_rows"] = $total_row;
			    $config["per_page"] = 20;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row/$config["per_page"];
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				$this->pagination->initialize($config);
				if($this->uri->segment(5)){
					$pages = ($this->uri->segment(5));
				}else{
					$pages = 1;
				}
				
				$data['cat_set'] = $cat;
				$data["property_data"] = $this->dbmodel->fetch_all_property($config["per_page"],$pages,$cat,$total_row);
				
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
			}
			
			if($page=='type') {
				$data['activa2'] = 'activa';
				//$data['activaa'] = 'activa';
				$data['purpose'] ='';
				$data['property_status'] = '';
				$data['payment_mood'] = '';
				$data['typee'] = $this->uri->segment(5);
				$config = array();
				$cat = str_replace("-"," ",$this->uri->segment(4));
				$type_property = str_replace("-"," ",$this->uri->segment(5));
				$data['cat'] = $cat;
				$data['title'] = $type_property.' '.$cat.' | My Property NG. ';
				$config["base_url"] = base_url()."pages/properties/type/".$this->uri->segment(4)."/".$this->uri->segment(5);
				$total_row = $this->dbmodel->count_all_property_with_type($cat,$type_property);
				$data['total_row'] = $total_row;
				
				$p = ($this->uri->segment(6));
				$config["total_rows"] = $total_row;
			    $config["per_page"] = 20;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row/$config["per_page"];
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				$this->pagination->initialize($config);
				if($this->uri->segment(6)){
					$pages = ($this->uri->segment(6));
				}else{
					$pages = 1;
				}
				
				$data['cat_set'] = $cat;
				$data["property_data"] = $this->dbmodel->fetch_all_property_with_type($config["per_page"],$pages,$cat,$type_property,$total_row);
				
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
			}
			
			$this->load->helper('url');
			$this->load->view('pages/header',$data);
			$this->load->view('pages/users/'.$page,$data);
			$this->load->view('pages/footer',$data);
		}
}
	
	

public function request( $page = 'make-request'){
		if(!file_exists('application/views/pages/users/'.$page.'.php')){
			$this->show_404($page);
		}else{
			$data['siteInfo'] = $this->siteInfo();
			$data['country'] = $this->country();
			$data['states'] = $this->states();
			$data['checkLogin'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					$_SESSION['logger'] = $_COOKIE['uba_text'];
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					$_SESSION['logger'] = $_SESSION['uba_text'];
				}
			};
			
			$data['checkLoginOut'] = function(){
				if(isset($_COOKIE['uba_text'])&&!empty($_COOKIE['uba_text'])){
					redirect(base_url());
				}else if(isset($_SESSION['uba_text'])&&!empty($_SESSION['uba_text'])){
					redirect(base_url());
				}
			};
			
			$data['authenticate_user'] = function(){
				if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){

				}else{
					redirect(base_url().'auth/endsession');
				}
			};
			
			$data['user_data'] = $this->dbmodel->getLogginUserData($_SESSION['logger']);
			
			$data['request_data2'] = $this->dbmodel->getAllUserRequestProperty($data['user_data']['unique_id']);
			
			$data['category'] = $this->dbmodel->getAllPropertyCategory();
			
			$data['type'] = $this->dbmodel->getAllPropertyType();
			
			$data['count_post_properties'] = $this->dbmodel->countUserPostProperty($data['user_data']['unique_id']);
			
			$data['count_post_land'] = $this->dbmodel->countUserPostLand($data['user_data']['unique_id']);
		     
			if ($page == 'my-request') {
				$data['title'] = 'My Request | My Property NG. ';
				$data['activa14'] = 'activa';
				$data['activaa'] = 'activa';
				$config = array();
				$config["base_url"] = base_url()."pages/request/my-request";
				$total_row = $this->dbmodel->record_count($data['user_data']['unique_id']);
				$config["total_rows"] = $total_row;
				$config["per_page"] = 20;
				$config['use_page_numbers'] = TRUE;
				$config['num_links'] = $total_row;
				$config['cur_tag_open'] = '&nbsp;<a class="current">';
				$config['cur_tag_close'] = '</a>';
				$config['next_link'] = 'Next';
				$config['prev_link'] = 'Previous';
				$this->pagination->initialize($config);
				if($this->uri->segment(4)){
					$pages = ($this->uri->segment(4));
				}else{
					$pages = 1;
				}
				$data["request_data"] = $this->dbmodel->fetch_data($config["per_page"], $data['user_data']['unique_id'],$pages);
				$str_links = $this->pagination->create_links();
				$data["links"] = explode('&nbsp;',$str_links );
				$data['edit_request_status'] = $this->dbmodel->on_of_request_edit_del();
			}
			
			
			if ($page == 'edit-request') {
				$data['title'] = 'Edit Request | My Property NG. ';
				$data['activa14'] = 'activa';
				$data['activaa'] = 'activa';
				$config = array();
				$config["base_url"] = base_url()."pages/request/edit-request";
				if($this->uri->segment(4)){
					$pages = ($this->uri->segment(4));
				}
				else{
					$pages = 1;
				}
				$data["request_data"] = $this->dbmodel->getRequest($data['user_data']['unique_id'], $pages);
			}
			
			if ($page == 'saved-property') {
				$data['title'] = 'My Saved Property | My Property NG. ';
				$data['activa15'] = 'activa';
				$data['activaa'] = 'activa';
			}
			$this->load->helper('url');
			$this->load->view('pages/header',$data);
			$this->load->view('pages/users/'.$page,$data);
			$this->load->view('pages/footer',$data);
		}
	}
	
	
	
}

?>