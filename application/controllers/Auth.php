<?php
class Auth extends CI_Controller
{
	var $property_post = 'property_post';
	var $reply_a_request = 'reply_a_request';
	var $request_a_property = 'request_a_property';
	var $user_tb = 'user_tb';
	var $property_category = 'property_category';
	var $property_type = 'property_type';
	var $on_off_edit_del_request = 'on_off_edit_del_request';
	var $my_saved_property = 'my_saved_property';
	var $agorithm = 'haval160,4';
	public function __construct(){
			parent::__construct();
		    $this->load->model('dbmodel');
		}
	
public function getUserData($field){
	$query = $this->db->get_where($this->user_tb, array('hashed_pot'=>$_SESSION['logger']));
		    $row = $query->row_array();
	return $row[$field];
}

public function randGenerator(){
				$randnum = time();
				$randpicker = rand(1,143);
				$pickerbox = array('RCA','RCB','RCC','RCD','RCE','RCF','RCG','RCH','RCI','RCJ','RCK','RCL','RCM','RCN','RCO','RCP','RCQ','RCR','RCS','RCT','RCU','RCV','RCW','RCX','RCY','RCZ','RTA','RTB','RT','RTC','RTD','RTE','RTF','RTG','RTH','RTI','RTJ','RTK','RTL','RTM','RTN','RTO','RTP','RTQ','RTR','RTS','RTT','RTU','RTV','RTW','RTX','RTY','RTZ','RPA','RPB','RPC','RPD','RPD','RPE','RPF','RPG','RPH','RPI','RPJ','RPK','RPL','RPM','RPN','RPO','RPP','RPQ','RPR','RPS','RPT','RPU','RPV','RPW','RPX','RPY','RPZ','RRR','REA','REB','REC','RED','REE','REF','REG','REH','REI','REJ','REK','REL','REM','REN','REO','REP','REQ','RER','RES','RET','REU','REV','REW','REX','REY','REZ','RDA','RDB','RDC','RDD','RDE',"RAA","RBH","RHJ","RKK","RWH","RBB","RFC","RGC","RHC","RJC","RKC","TLC","TZC","TXC","TCC","TVC","TBC","TNC","TDO","TDT","TTT","TAG","TAH","TAS","TAR","TAC","TAT","TAZ","TSY","TSB","TZX","TQO","TAP");
				$shuff = $pickerbox[$randpicker];
	            $id = strtoupper(substr(uniqid(), 5));
				$main = $shuff.$randnum.$id;
				return $main; 
			}
		////get date
public function getDate(){
				return date("Y-m-d h:i:s");//2017-08-02 00:00:00
			}
				////get date
public function getDate2(){
				return date("Y-m-d");//2017-08-02 00:00:00
			}

		 
public  function passwordHash($algorithm,$password){
					  $md5_value = hash($algorithm, $password, FALSE);
					  return $md5_value;
          }
	
public function endsession(){
	session_destroy();
	session_unset();
	setcookie("uba_text","",time()-(86400 * 360),"/");
	redirect(base_url().'login');
}
	
public function extentionName($filename){
		    $extension = mb_strtolower(substr($filename, strpos($filename, '.') + 1));
			return '.'.$extension;
}

public function picVlidator($picname,$picsize){
	$maxsiz = 2097152;
	if($picsize>2097152){
		  return 'Picture size to big use image lessthan 2MB';
		}else{
		   $picextension = mb_strtolower(substr($picname, strpos($picname, '.') + 1));
		if($picextension =='jpg' || $picextension =='jpeg' || $picextension =='gif' || $picextension =='png'){

			}else{
			$errMsg =  'please use images-eg..jpg,.jpeg,.gif,.png.';
			return $errMsg;
			}
		}
}
	
public function unlinkFile($fileName,$filePath){
			    	@unlink($filePath.$fileName);
					return $this;
}
	
public function uploadImage($imageTempname,$imageNewLocation){
		if(move_uploaded_file($imageTempname,$imageNewLocation)){
			}else{
				return 'Error occured. Image failed to upload to folder.';
			}
}
	
	
public function passport_update(){
if(isset($_POST["crop_image"])){
	$data = $_POST["crop_image"];
	$gen_Num = $this->randGenerator();
	$query = $this->db->get_where($this->user_tb, array('unique_id'=>$_POST['userid']));
	$row = $query->row_array();
	$passportIn = $row['passport'];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	$fileName = $gen_Num.uniqid().time().'.jpg';
	$imageName = './upload/'.$fileName;
	if(file_put_contents($imageName, $data)){
		if($passportIn!='avatar.png' || $passportIn!='avatarm.png' || $passportIn!='avatarf.png'){
		 $this->unlinkFile($passportIn,'./upload/');
		  }
		$src = base_url().'upload/'.$fileName;
		$data = array(
		  "passport"=> $fileName
			);
		if($this->db->update($this->user_tb, $data, array("unique_id"=>$_POST['userid']))){
			print json_encode(array('success'=>'File upload was successful!', "src"=>$src));
		  }else{
			print json_encode(array('error'=>'Upload faild! Try again.'));
			}
	}else{print json_encode(array('error'=>'File faild to upload. Try again'));}
	//echo '<img src="'.$imageName.'" class="img-thumbnail" />';
	}else{
	print json_encode(array('error'=>'File faild to upload. Try again'));
  }
}
	
public function logo_update(){
if(isset($_POST["crop_image"])){
	$data = $_POST["crop_image"];
	$gen_Num = $this->randGenerator();
	$query = $this->db->get_where($this->user_tb, array('unique_id'=>$_POST['userid']));
	$row = $query->row_array();
	$passportIn = $row['company_logo'];
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	$fileName = $gen_Num.uniqid().time().'.jpg';
	$imageName = './company_logo/'.$fileName;
	if(file_put_contents($imageName, $data)){
		if($passportIn!='avatar.png'){
		 $this->unlinkFile($passportIn,'./company_logo/');
		  }
		$src = base_url().'company_logo/'.$fileName;
		$data = array(
		  "company_logo"=> $fileName
			);
		if($this->db->update($this->user_tb, $data, array("unique_id"=>$_POST['userid']))){
			print json_encode(array('success'=>'File upload was successful!', "src"=>$src));
		  }else{
			print json_encode(array('error'=>'Upload faild! Try again.'));
			}
	}else{print json_encode(array('error'=>'File faild to upload. Try again'));}
	}else{
	print json_encode(array('error'=>'File faild to upload. Try again'));
  }
}
	
public function login(){
		header("Content-Type: application/json; charset=UTF-8");
		if(isset($_POST['login_email'])){
			if(!empty($_POST['login_email'])&&!empty($_POST['login_pass'])){
				$passh = $this->passwordHash($this->agorithm,$_POST["login_pass"]);
				$email = $_POST["login_email"];
				$rem = $_POST["login_rem"];
				$query = $this->db->get_where($this->user_tb, array("email"=>$email,"password"=>$passh));
				$row = $query->row_array();
				if($query->num_rows()>0){
				 if($row['activate_email']=="yes"){
				  if($row['block_account']==1){
					  print json_encode(array("error"=>'Your Account is locked please contact support: support@mypropertyng.com'));
				  }else{
					if($rem==1){
						setcookie("uba_text",$row['hashed_pot'],time()+(86400 * 360),"/");
						$_SESSION['logger'] = $row['hashed_pot'];
						print json_encode(array("success"=>$row));
					}else{
						$data = array('uba_text'=>$row['hashed_pot']);
						$this->session->set_userdata($data);
						$dat = array('logger'=>$_SESSION['uba_text']);
						$this->session->set_userdata($dat);
						print json_encode(array("success"=>$row));
					}
				  }//block
				 }else{
					 $info = array("error"=>'Sorry you can not access your account because your email has not been activated. <a href="send-activation-link?id='.$row['hashed_pot'].'"  style="color:#06C; font-size:16px;">I have not received any email <u>Resend Activation Link?</u></a><br />', "resend"=>'yes');
					 print json_encode($info); 
					 $this->session->set_flashdata($info);
				 }
				}else{
				print json_encode(array("error"=>'Invalid Email/Password Combination!'));	
				}
			}else{
				print json_encode(array("error"=>'Invalid Email/Password Combination!'));
			}
		}
	}
	
public function user_update(){
	if(isset($_POST['regbox_update'])){
			header("Content-Type: application/json; charset=UTF-8");	if(!empty($_POST["email"])&&!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["phone"])&&!empty($_POST["sex"])){					 
 $data = array(
	 "first_name" => ucfirst(strtolower(trim($_POST["fname"]))),
	 "last_name" => ucfirst(strtolower(trim($_POST["lname"]))),
	 "sex" => ucfirst(strtolower($_POST["sex"])),
	 "phone" => '+'.str_replace(' ', '',trim($_POST["phone"])),
	 "address" => trim($_POST["address"]),
	 "state_of_origin" => ucfirst(strtolower($_POST["state"])),
	 "nationality" => $_POST["country"],
	 "role" => $_POST["role"]
 );		
				if($update = $this->db->update($this->user_tb, $data, array("email"=>$_POST['email']))){
					   $info = array("success"=>'Hi '.$_POST["fname"].', your account update was successful!.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Hi '.$_POST["fname"].', your account update failed! Please try again and ensure you enter all fields correctly. Thanks'));
				   }
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}		
}


public function user_company_info(){
 if(isset($_POST['regbox_update'])){
	header("Content-Type: application/json; charset=UTF-8");	if(!empty($_POST["email"])&&!empty($_POST["cname"])&&!empty($_POST["office_no"])&&!empty($_POST["base_area"])&&!empty($_POST["offic_address"])){					 
 $data = array(
	 "company_name" => ucfirst(strtolower(trim($_POST["cname"]))),
	 "office_numbers" => trim($_POST["office_no"]),
	 "whatsapp_number" => '+'.str_replace(' ', '',trim($_POST["whatsapp_no"])),
	 "office_address" => trim($_POST["offic_address"]),
	 "based_area" => trim($_POST["base_area"]),
	 "map" => trim($_POST["mapp"]),
	 "agents_comment" => trim($_POST["agents_comment"]),
	 "website" => trim($_POST['website']),
	 "facebook_link" => trim($_POST['facebook_link']),
	 "twiter_link" => trim($_POST['twitter_link'])
 );		
			if($update = $this->db->update($this->user_tb, $data, array("email"=>$_POST['email']))){
				   $info = array("success"=>'Hi, your account update was successful!.',"returndata"=>$data);
				   print  json_encode($info);
				   $this->session->set_flashdata($info);
			   }else{ 
				   print  json_encode(array("error"=>'Hi, your account update failed! Please try again and ensure you enter all fields correctly. Thanks'));
			   }
			 }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}		
}	
	
	
public function user(){
	header("Content-Type: application/json; charset=UTF-8");
	if(isset($_POST['regbox'])){	if(!empty($_POST["email"])&&!empty($_POST["fname"])&&!empty($_POST["lname"])&&!empty($_POST["phone"])&&!empty($_POST["sex"])&&!empty($_POST["pass"])&&!empty($_POST["cpass"])){
				 $query = $this->db->get_where($this->user_tb, array('email' => $_POST["email"]));
				  if($query->num_rows()>0){
					 print  json_encode(array("error"=>'Email address already exists! Try something new.'));
				  }else{
					if($_POST["pass"]!=$_POST["cpass"]){
						print  json_encode(array("error"=>'Password does not match!'));
					}else{
				     if(strlen($_POST["pass"])<8 || strlen($_POST["pass"])>36){
						 print  json_encode(array("error"=>'Password length must be between 8 - 36 characters!'));
					 }else{
					if($_POST["sex"]=='Male'){
						$avatar = 'avatarm.png';
					}else if($_POST["sex"]=='Female'){
						$avatar = 'avatarf.png';
					}else{
						$avatar = 'avatar.png';
					}
						 
 $data = array(
	 "id" => null,
	 "unique_id" => $this->randGenerator(),
	 "first_name" => ucfirst(strtolower(trim($_POST["fname"]))),
	 "last_name" => ucfirst(strtolower(trim($_POST["lname"]))),
	 "sex" => ucfirst(strtolower($_POST["sex"])),
	 "email" => strtolower(trim($_POST["email"])),
	 "phone" => '+'.str_replace(' ', '',trim($_POST["phone"])),
	 "address" => trim($_POST["address"]),
	 "state_of_origin" => '',
	 "nationality" => '',
	 "password" => $this->passwordHash($this->agorithm,$_POST["pass"]),
	 "forget_password" => uniqid(),
	 "activate_email" => 'no',
	 "passport" => $avatar,
	 "role" => strtolower($_POST["regbox"]),
	 "based_area" => '',
	 "agents_comment" => '',
	 "phone_verification_code" => strtoupper(substr(uniqid(), 6)),
	 "phone_verification" => 'no',
	 "block_account" => '0',
	 "hashed_pot" => $this->passwordHash($this->agorithm,$_POST["email"]),
	 "date_reg" => $this->getDate(),
	 "company_name" => '',
	 "office_address" => '',
	 "office_numbers" => '',
	 "whatsapp_number" => '',
	 "company_logo" => 'avarta.png',
	 "agent_account_approval" => 'no'
 );
						
				   if($insert = $this->db->insert($this->user_tb, $data)){
					   $info = array("success"=>'Hi '.$_POST["fname"].', your registration was successful. We have sent you a mail. Proceed to activate your email address, then login to access your account.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Hi '.$_POST["fname"].', your registration failed! Please try again and ensure you enter all fields correctly. Thanks'));
				   }
				  }//pass
				 }//pass
				}
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}	
		
}
	

public function update_password(){
	if(isset($_POST['regbox_passUpdate'])){
			header("Content-Type: application/json; charset=UTF-8");
	if(!empty($_POST["pass"])&&!empty($_POST["cpass"])&&!empty($_POST['oldpass'])){
	$oldpassDB = $this->dbmodel->getUserSingleData($_POST['userid'],'password');
	$oldpassUser = $this->passwordHash($this->agorithm,$_POST['oldpass']);
	if($oldpassUser==$oldpassDB){
		
					if($_POST["pass"]!=$_POST["cpass"]){
						print  json_encode(array("error"=>'Password does not match!'));
					}else{
				     if(strlen($_POST["pass"])<8 || strlen($_POST["pass"])>36){
						 print  json_encode(array("error"=>'Password length must be between 8 - 36 characters!'));
					 }else{	 
 $data = array(
	 "password" => $this->passwordHash($this->agorithm,$_POST["pass"]),
 );
			if($insert = $this->db->update($this->user_tb, $data, array("unique_id"=>$_POST['userid']))){
					   $info = array("success"=>'Password update was successful!.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Password update failed! Please try again and ensure you enter all fields correctly. Thanks'));
				   }
				  }//pass
				 }//pass
	}else{
		print json_encode(array("error"=>'Oops! Old Password you enter does not match what we have in our database. Try again.'));
	}
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}		
}	
	

public function MakeRequest(){
	header("Content-Type: application/json; charset=UTF-8");
	if(isset($_POST['Make_request'])){	if(!empty($_POST["request_category"])&&!empty($_POST["request_type"])&&!empty($_POST["budget"])&&!empty($_POST["preferred_town"])&&!empty($_POST["preferred_state"])&&!empty($_POST["request_comment"])&&!empty($_POST["currency"])){
				
 $data = array(
	 "id" => null,
	 "unique_id" => $this->randGenerator(),
	 "user_unique_id" => $_POST['user_unique_id'],
	 "request_comment" => $_POST['request_comment'],
	 "request_category" => $_POST["request_category"],
	 "no_of_bedroom" => $_POST["no_of_bedroom"],
	 "budget" => $_POST["budget"],
	 "preferred_town" => $_POST["preferred_town"],
	 "preferred_state" => $_POST["preferred_state"],
	 "how_urgent" => $_POST["how_urgent"],
	 "request_type" => $_POST["request_type"],
	 "status" => "processing",
	 "requst_from" => $_POST['requst_from'],
	 "request_date" => $this->getDate(),
	 "currency" => $_POST["currency"]
 );	
	if($insert = $this->db->insert($this->request_a_property, $data)){
					   $info = array("success"=>'Hi, your request has been recieved successfully. Ones reviwed we will link you to an agent who will assit you.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Hi, we encountered an error while trying to send your request across to our server. Please try again. Thanks'));
				   }
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}	
		
}
	
	
public function editRequest(){
	header("Content-Type: application/json; charset=UTF-8");
	if(isset($_POST['Make_request'])){	if(!empty($_POST["request_category"])&&!empty($_POST["request_type"])&&!empty($_POST["budget"])&&!empty($_POST["preferred_town"])&&!empty($_POST["preferred_state"])&&!empty($_POST["request_comment"])){
				
 $data = array(
	 "request_comment" => $_POST['request_comment'],
	 "request_category" => $_POST["request_category"],
	 "no_of_bedroom" => $_POST["no_of_bedroom"],
	 "budget" => $_POST["budget"],
	 "preferred_town" => $_POST["preferred_town"],
	 "preferred_state" => $_POST["preferred_state"],
	 "how_urgent" => $_POST["how_urgent"],
	 "request_type" => $_POST["request_type"],
	 "requst_from" => $_POST['requst_from'],
 );	
	if($update = $this->db->update($this->request_a_property, $data, array("id"=>$_POST['request_id']))){
					   $info = array("success"=>'Hi, your request has been successfully Update!.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Hi, we encountered an error while trying to update your request. Please try again. Thanks'));
				   }
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}	
		
}
	
	
public function deleteRequest(){
	header("Content-Type: application/json; charset=UTF-8");
	if(isset($_POST['delete_requset'])){
		if(!empty($_POST['request_id'])){
			if($this->db->delete($this->request_a_property, array("id"=>$_POST['request_id']))){
				print  json_encode(array("success"=>'Item was deleted successfully!'));
			}else{
				print  json_encode(array("error"=>'System Error! Data failed to delete!'));
			}
		}else{
			print  json_encode(array("error"=>'System Error! Please reload page and try again!'));
		}
	}
}
	
	
public function addProperty(){
	if(isset($_POST['add_property'])){ 
			header("Content-Type: application/json; charset=UTF-8");	if(!empty($_POST["property_title"])&&!empty($_POST["category"])&&!empty($_POST["type"])&&!empty($_POST["price"])&&!empty($_POST["state"])&&!empty($_POST["town"])&&!empty($_POST["description"])){					 
 $data = array(
	 "id" => null,
	 "unique_id" => $this->randGenerator(),
	 "whois" => $_POST["requst_from"],
	 "whois_unique_id" => $_POST["user_unique_id"],
	 "property_category" => $_POST["category"],
	 "property_purpose" => $_POST["purpose"],
	 "property_thumbnail" => 'thumbnail.png',
	 "property_images" => '',
	 "property_type" => $_POST["type"],
	 "property_title" => $_POST["property_title"],
	 "property_location" => $_POST["town"],
	 "property_city" => $_POST["state"],
	 "property_country" => $_POST["property_country"],
	 "property_description" => $_POST["description"],
	 "currency" => $_POST['currency'],
	 "property_price" => $_POST["price"],
	 "property_older_price" => '',
	 "property_status" => $_POST["status"],
	 "property_features" => $_POST["features"],
	 "payment_type" => $_POST["paymood"],
	 "no_of_rooms" => $_POST["num_rom"],
	 "no_of_bathrooms" => $_POST["bathroom"],
	 "no_of_toilets" => $_POST["toilet"],
	 "no_of_parking_space" => $_POST["parking"],
	 "total_land_area" => $_POST["land_area"],
	 "property_area" => $_POST["property_area"],
	 "furnishing" => $_POST["standard"],
	 "youtube_link" => $_POST["youtube"],
	 "publish_status" => '',
	 "subscription" => '1',
	 "last_update" => $this->getDate(),
	 "post_date" => $this->getDate()
 );
						
				if($insert = $this->db->insert($this->property_post, $data)){
					   $info = array("success"=>'Step 1: Adding Property Information was Successful! You will be redirected soon.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Adding new property failed! Please try again and ensure you enter all fields correctly. Thanks'));
				   }
			  }else{
				  print json_encode(array("error"=>'Please fill all necessary fields!'));
			}//formvalidation
		}	
		
}
	
	
public function thumbnail_update(){
if(isset($_POST["crop_image"])){
	$data = $_POST["crop_image"];
	$gen_Num = $this->randGenerator();
	$query = $this->db->get_where($this->property_post, array('unique_id'=>$_POST['userid']));
		 $row = $query->row_array();
		 $passportIn = $row['property_thumbnail'];
		
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	$fileName = $gen_Num.uniqid().time().'.jpg';
	$imageName = './property_upload/'.$fileName;
	if(file_put_contents($imageName, $data)){
		if($passportIn!='thumbnail.png'){
		 $this->unlinkFile($passportIn,'./property_upload/');
		  }
		$src = base_url().'property_upload/'.$fileName;
		$data = array(
		  "property_thumbnail"=> $fileName
			);
		if($this->db->update($this->property_post, $data, array("unique_id"=>$_POST['userid']))){
			print json_encode(array('success'=>'File upload was successful!', "src"=>$src));
		  }else{
			print json_encode(array('error'=>'Upload faild! Try again.'));
			}
	}else{print json_encode(array('error'=>'File faild to upload. Try again'));}
	//echo '<img src="'.$imageName.'" class="img-thumbnail" />';
	}
}
	
	
public function multiple_image_update(){
if(isset($_POST["mult_crop_image"])){
	$data = $_POST["mult_crop_image"];
	$img_extn = array();
	$to_insert = '';
	$lop = '';
	$error = '';
	$post_data = $this->dbmodel->countMultiImages($_POST['postid']);
	$uploaded = explode(",", $post_data['property_images']);
	$num_uploaded = count($uploaded)-1;
	if($num_uploaded >= 8){
		print json_encode(array('error'=>'A maximum of 8 images allowed!'));
	}else{
	  if(1+$num_uploaded > 8){
		 print json_encode(array('error'=>'Oops you have upload '.$num_uploaded.' images before remaining '.(8-$num_uploaded).'! Please select only '.(8-$num_uploaded).' images. Thanks')); 
	  }else{
	
	$image_array_1 = explode(";", $data);
	$image_array_2 = explode(",", $image_array_1[1]);
	$data = base64_decode($image_array_2[1]);
	$fileName = $this->randGenerator().rand().uniqid().'.jpg';
	$imageName = './property_upload/'.$fileName;
	$fileNameIN = $fileName.',';
	if(file_put_contents($imageName, $data)){
		$src = base_url().'property_upload/'.$fileName;
		$data = array(
		  "property_images"=> $post_data['property_images'].$fileNameIN
			);
		if($this->db->update($this->property_post, $data, array("unique_id"=>$_POST['postid']))){
			print json_encode(array('success'=>'File upload was successful!', "src"=>$src));
		  }else{
			print json_encode(array('error'=>'Upload faild! Try again.'));
			}
	}else{print json_encode(array('error'=>'File faild to upload. Try again'));}		
			
		}
	}
  }
}	
	
	
public function multipleImageUpload(){
if(isset($_FILES['multFile']['name'])){
	if(count($_FILES['multFile']['name'])>0){
	sleep(3);
	$img_extn = array();
	$to_insert = '';
	$lop = '';
	$error = '';
	$post_data = $this->dbmodel->countMultiImages($_POST['postid']);
	$uploaded = explode(",", $post_data['property_images']);
	$num_uploaded = count($uploaded)-1;
	if($num_uploaded >= 8){
		print json_encode(array('error'=>'A maximum of 8 images allowed!'));
	}else{
	  if(count($_FILES['multFile']['name'])+$num_uploaded > 8){
		 print json_encode(array('error'=>'Oops you have upload '.$num_uploaded.' images before remaining '.(8-$num_uploaded).'! Please select only '.(8-$num_uploaded).' images. Thanks')); 
	  }else{
		 for($count=0; $count<count($_FILES["multFile"]["name"]); $count++){
			$file_name = $_FILES["multFile"]["name"][$count];
			$tmp_name = $_FILES["multFile"]['tmp_name'][$count];
			$file_array = explode(".", $file_name);
			$file_extension = strtolower(end($file_array));
			$img_extn = array('jpg','png','jpeg','gif');
			if(in_array($file_extension, $img_extn)){
				
			}else{
				$error = 'Invalid file type '.$file_name.' use eg: png, jpg, jpeg, gif';
			}
			$new_name = $this->randGenerator().rand().uniqid() . '.' . $file_extension;
			$location = './property_upload/'.$new_name;
			  if(move_uploaded_file($tmp_name, $location)){
				  $to_insert .= $new_name.',';
			  }else{
				  $error = 'Image upload failed! Try again.';
			  }
			 
		 } 
		  $getImg = explode(",", ($post_data['property_images'].$to_insert));
		  $cot = count($getImg)-1;
		  for($i=0;$i<$cot;$i++){
			 $lop .= '<div class="col-lg-3">
                       <div class="inner-cover">
                         <span class="tag-images"><input type="checkbox" id="del_mult" name="del_mult" value="'.$getImg[$i].'"></span>
                           <img id="pp" class="" src="'.base_url().'property_upload/'.$getImg[$i].'">
				     </div>
                    </div>'; 
		  }
		  if($error==''){
			 $data = array(
		  			"property_images"=> $post_data['property_images'].$to_insert
					);
			if($this->db->update($this->property_post, $data, array("unique_id"=>$_POST['postid']))){
				print json_encode(array('success'=>'Image upload was successful!','lop'=>$lop));
			  }else{
				print json_encode(array('error'=>'Upload faild! Try again.'));
				}
		  }else{
			  print json_encode(array('error'=>$error));
		  }
	  }
	}
   }else{
   print json_encode(array('error'=>'Please upload a valid image file!'));	
  }
 }
}	


public function deleteMultipleImages(){
$data = $this->dbmodel->countMultiImages($_POST['postid']);
$getImgDB = explode(",", $data['property_images']);
$cot = count($getImgDB)-1;
	for($i=0;$i<$cot;$i++){
		$main_ary[] = $getImgDB[$i];
	}
	
$cod='';$msg='';$keyToRemove;$error='';$to_insert='';$lop='';
$image_names = $_POST['list'];
if(isset($image_names)){

	for($i = 0; $i < count($image_names); $i++){
		
		if(in_array($image_names[$i], $main_ary)){
			$keyToRemove = array_search($image_names[$i], $main_ary);
			if(array_splice($main_ary, $keyToRemove, 1)){
				$cod = 'success';
				$msg = 'Items was deleted successfully!';
			}else{
				$cod = 'error';
				$msg = 'Error occured item(s) failed to delete!';
				$error = 'yes';
			}
		}
		
	}
	
	for($i=0;$i<count($main_ary);$i++){
		$to_insert .= $main_ary[$i].',';
	}
	
	$getImg = explode(",", ($to_insert));
		  $cot = count($getImg)-1;
		  for($i=0;$i<$cot;$i++){
			 $lop .= '<div class="col-lg-3">
                       <div class="inner-cover">
                         <span class="tag-images"><input type="checkbox" id="del_mult" name="del_mult" value="'.$getImg[$i].'"></span>
                           <img id="pp" class="" src="'.base_url().'property_upload/'.$getImg[$i].'">
				     </div>
                    </div>'; 
		  }
	
  if($error==''){
			 $data = array(
		  	"property_images"=> $to_insert
				);
			if($this->db->update($this->property_post, $data, array("unique_id"=>$_POST['postid']))){
				print json_encode(array('success'=>'Image(s)  was successful deleted!','lop'=>$lop));
				for($i = 0; $i < count($image_names); $i++){
					$this->unlinkFile($image_names[$i],'./property_upload/');
				}
			  }else{
				print json_encode(array('error'=>'Image(s) failed to delete! Try again.'));
				}
		 
	}else{
		print json_encode(array('error'=>'Error occured item(s) failed to delete!'));
	}		
  }
}	
	
public function publishProperty(){
	if(isset($_POST['publishstate'])){
		if(!empty($_POST['postid'])&&!empty($_POST['publishstate'])){
			$data = array(
		  	"publish_status" => $_POST['publishstate']
				);
			if($this->db->update($this->property_post, $data, array("unique_id"=>$_POST['postid']))){
				print json_encode(array('success'=>ucfirst($_POST['publishstate']).'ed Successfully!'));
			  }else{
				print json_encode(array('error'=>'Failed to '.ucfirst($_POST['publishstate']).'ed delete! Try again.'));
				}
		}
	}
}
	
	
public function saveProperty(){
	if(isset($_POST['Save_Property'])){
			header("Content-Type: application/json; charset=UTF-8");	if(!empty($_POST["user_unique_id"])&&!empty($_POST["agent_unique_id"])&&!empty($_POST["property_unique_id"])){
$value  = $this->dbmodel->check_if_saved_property_exist($_POST["user_unique_id"],$_POST["property_unique_id"]);				
if($value>0){
	print  json_encode(array("error"=>'Saved. Thanks'));
}else{
 $data = array(
	 "id" => null,
	 "unique_id" => $this->randGenerator(),
	 "user_unique_id" => $_POST["user_unique_id"],
	 "agent_unique_id" => $_POST["agent_unique_id"],
	 "property_unique_id" => $_POST["property_unique_id"],
	 "date_saved" => $this->getDate()
 );		
				if($insert = $this->db->insert($this->my_saved_property, $data)){
					   $info = array("success"=>'Property was Successful saved!.',"returndata"=>$data);
					   print  json_encode($info);
					   $this->session->set_flashdata($info);
				   }else{ 
					   print  json_encode(array("error"=>'Property failed to save! Please try again. Thanks'));
				   }
			}//check end
			  }else{
				  print json_encode(array("error"=>'Internal error. Please tyr again!'));
			}//formvalidation
		}		
}	
	
	
	
}
?>