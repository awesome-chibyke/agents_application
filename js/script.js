$('#loader').hide();
$('#is').hide();
$('.hoverImg').css("cursor","pointer");
$('#cam').css("cursor","pointer");
$('#del_cam').css("cursor","pointer");
$('#imgHy').css("cursor","pointer");
$('.saver').css("cursor","pointer");
$('.dr').css("cursor","pointer");

$(document).ready(function(){
$('.smimgw').on("click",function(){
	var src = $(this).attr("src");
	if(src!=""){
		$('.bigimgw').attr("src",src);
	}
});
	});
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

function redirectPage(parame){
	window.location = parame;
	}

function refreshThisPage(){
	window.location.reload();
	}

$('#goToCat').on('change', function(){
	var baseUrl = document.getElementById('baseurl').value;
	window.location = baseUrl+'pages/dashboard/property-listing/'+$(this).val();
});

$('#goToState').on('change', function(){
	var baseUrl = document.getElementById('baseurl').value;
	window.location = baseUrl+'pages/properties/states/'+$(this).val();
});

$('#goToType').on('change', function(){
	var baseUrl = document.getElementById('baseurl').value;
	window.location = baseUrl+'pages/properties/property/'+$(this).val();
});

function users_reg(base_url){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
            var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('phone').value;
			var address = document.getElementById('address').value;
			var sex = document.getElementById('sex').value;
			var pass = document.getElementById('pass').value;
	        var cpass = document.getElementById('cpass').value;
	        var regbox = document.getElementById('role').value;
			dbParam = "fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&address="+address+"&pass="+pass+"&cpass="+cpass+"&sex="+sex+"&regbox="+regbox;
	if(fname=="" || lname=="" || sex=="" || email=="" || phone=="" || pass=="" || cpass==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test(email) ) {
			swal({type:'error',title:'Please use a valid email address!',showConfirmButton:true});
		}else{
		 if(pass!=cpass){
			 swal({type:'error',title:'Password does not match!',showConfirmButton:true});
		 }else{
			if(pass.length<8 || pass.length>36){
				swal({type:'error',title:'Password length should be between 8 - 36 characters!',showConfirmButton:true});
			}else{
				
				
	hr.open("POST", base_url+"auth/user", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true}); 
			  }
					if(getObj.success){
 swal({type:'success',title:'Registration was successful you will be redirected shortly!',showConfirmButton:true});
			setTimeout(function() {
               redirectPage(base_url+'login?info=done');
             }, 2000);
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
		}//pass
	   }//pass
	 }//email
	}
}



function login(base_url){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
			var login_email = document.getElementById('login_email').value;
			var login_pass = document.getElementById('login_pass').value;
	        if(document.getElementById("login_rem").checked){
				var login_rem = 1;	
			}else{
				var login_rem = 0;
			}
			dbParam = "login_email="+login_email+"&login_pass="+login_pass+"&login_rem="+login_rem;
	if(login_email=="" || login_pass==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds!',showConfirmButton:true});
	}else{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test(login_email) ) {
			swal({type:'error',title:'Please use a valid email address!',showConfirmButton:true});
		}else{		
	hr.open("POST", base_url+"auth/login", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true}); 
				setTimeout(refreshThisPage,2500);  
			  }
					if(getObj.success){
 swal({type:'success',title:'Login was successful you will be redirected shortly!',showConfirmButton:true});
						if(getObj.success.role=='user' || getObj.success.role=='agent' || getObj.success.role=='owner' || getObj.success.role=='builder' ){
							setTimeout(function() {
                             redirectPage(base_url+'users/home');
             			 	}, 2000);
						}else{
							setTimeout(function() {
                              redirectPage(base_url+'users/home');
             				}, 2000);
						}
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	 }//email
	}
}


function updateUser(base_url){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
            var fname = document.getElementById('fname').value;
			var lname = document.getElementById('lname').value;
			var email = document.getElementById('email').value;
			var phone = document.getElementById('phone').value;
			var address = document.getElementById('address').value;
			var sex = document.getElementById('sex').value;
			var state = document.getElementById('state').value;
	        var country = document.getElementById('country').value;
			var role = document.getElementById('role').value;
	        var regbox_update = 'user';
			dbParam = "fname="+fname+"&lname="+lname+"&email="+email+"&phone="+phone+"&address="+address+"&country="+country+"&state="+state+"&sex="+sex+"&regbox_update="+regbox_update+"&role="+role;
	if(fname=="" || lname=="" || sex=="" || email=="" || phone=="" || role=="" ){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test(email) ) {
			swal({type:'error',title:'Please use a valid email address!',showConfirmButton:true});
		}else{		
	hr.open("POST", base_url+"auth/user_update", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true}); 
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	 }//email
	}
}

function updateCompanyInfo(base_url){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
            var cname = document.getElementById('cname').value;
			var office_no = document.getElementById('office_no').value;
			var whatsapp_no = document.getElementById('whatsapp_no').value;
			var offic_address = document.getElementById('offic_address').value;
			var base_area = document.getElementById('base_area').value;
			var agents_comment = document.getElementById('agents_comment').value;
			var mapp = document.getElementById('mapp').value;
			var website = document.getElementById('website').value;
			var facebook_link = document.getElementById('facebook_link').value;
			var twitter_link = document.getElementById('twitter_link').value;
	        var email = document.getElementById('email').value;
	        var regbox_update = 'companyInfo';
			dbParam = "cname="+cname+"&office_no="+office_no+"&whatsapp_no="+whatsapp_no+"&offic_address="+offic_address+"&base_area="+base_area+"&regbox_update="+regbox_update+"&email="+email+"&agents_comment="+agents_comment+"&mapp="+mapp+"&website="+website+"&facebook_link="+facebook_link+"&twitter_link="+twitter_link;
	if(cname=="" || office_no=="" || offic_address=="" || base_area=="" || email==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{
	  if(email==""){
		swal({type:'error',title:'Internal error occured try again later!',showConfirmButton:true});
	   }else{
		var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
		if( !emailReg.test(email) ) {
			swal({type:'error',title:'Internal error occured try again!',showConfirmButton:true});
		}else{		
	hr.open("POST", base_url+"auth/user_company_info", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true}); 
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	 }//email
	 }
	}
}

function updatePassword(base_url){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
	        var userid = document.getElementById('id').value;
			var pass = document.getElementById('pass').value;
	        var cpass = document.getElementById('cpass').value;
	        var oldpass = document.getElementById('oldpass').value;
	        var regbox_passUpdate = 'user';
			dbParam = "pass="+pass+"&cpass="+cpass+"&regbox_passUpdate="+regbox_passUpdate+"&userid="+userid+"&oldpass="+oldpass;
	if( pass=="" || cpass=="" || oldpass==""){
		swal({type:'error',title:'Error! Invalid Email/Password Combination!',showConfirmButton:true});
	}else{
		 if(pass!=cpass){
			 swal({type:'error',title:'Password does not match!',showConfirmButton:true});
		 }else{
			if(pass.length<8 || pass.length>36){
				swal({type:'error',title:'Password length should be between 8 - 36 characters!',showConfirmButton:true});
			}else{		
	hr.open("POST", base_url+"auth/update_password", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
			document.getElementById('pass').value = "";
	        document.getElementById('cpass').value = "";
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
		}//pass
	   }//pass
	}
}


function makeRequest(base_url,id,role){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
			var request_category = document.getElementById('category').value;
	        var request_type = document.getElementById('type').value;
	        var no_of_bedroom = document.getElementById('rom_num').value;
	        var budget = document.getElementById('budget').value;
			var currency = document.getElementById('currency').value;
	        var preferred_town = document.getElementById('town').value;
	        var preferred_state = document.getElementById('state').value;
	        var num = document.getElementById('num').value;
	        var season = document.getElementById('season').value;
	        if(num=='Any Time' && season=='Any Time'){
				var how_urgent = num;
			}else{
	        	var how_urgent = num+' '+season;
			}
	        var request_comment = document.getElementById('request').value;
	        var user_unique_id = id;
	        var requst_from = role;
 	        var Make_request = 'Make_request';
			dbParam = "request_category="+request_category+"&request_type="+request_type+"&no_of_bedroom="+no_of_bedroom+"&budget="+budget+"&preferred_town="+preferred_town+"&preferred_state="+preferred_state+"&how_urgent="+how_urgent+"&request_comment="+request_comment+"&Make_request="+Make_request+"&user_unique_id="+user_unique_id+"&requst_from="+requst_from+"&currency="+currency;
	if( request_category=="" || request_type=="" || budget=="" || preferred_town=="" || preferred_state=="" || request_comment=="" || currency==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{	
	hr.open("POST", base_url+"auth/MakeRequest", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
						$('#isme').hide();
						$('#is').show();
						$('#is').html(getObj.success);
						$(window).scrollTop(0);
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	}
}


function editRequest(base_url,role,request_id){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
			var request_category = document.getElementById('category').value;
	        var request_type = document.getElementById('type').value;
	        var no_of_bedroom = document.getElementById('rom_num').value;
	        var budget = document.getElementById('budget').value;
	        var preferred_town = document.getElementById('town').value;
	        var preferred_state = document.getElementById('state').value;
	        var num = document.getElementById('num').value;
	        var season = document.getElementById('season').value;
	        if(num=='Any Time' && season=='Any Time'){
				var how_urgent = num;
			}else{
	        	var how_urgent = num+' '+season;
			}
	        var request_comment = document.getElementById('request').value;
	        var requst_from = role;
	        var request_id = request_id;
 	        var Make_request = 'Make_request';
			dbParam = "request_category="+request_category+"&request_type="+request_type+"&no_of_bedroom="+no_of_bedroom+"&budget="+budget+"&preferred_town="+preferred_town+"&preferred_state="+preferred_state+"&how_urgent="+how_urgent+"&request_comment="+request_comment+"&Make_request="+Make_request+"&requst_from="+requst_from+"&request_id="+request_id;
	if( request_category=="" || request_type=="" || budget=="" || preferred_town=="" || preferred_state=="" || request_comment==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{	
	hr.open("POST", base_url+"auth/editRequest", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
						$('#isme').hide();
						$('#is').show();
						$('#is').html(getObj.success);
						$(window).scrollTop(0);
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	}
}


function deleteRequest(base_url,id){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
			var request_id = id;
	        var delete_requset = 'delete';
			dbParam = "request_id="+request_id+"&delete_requset="+delete_requset;
	if( request_id=="" ){
		swal({type:'error',title:'System Error! Please reload page and try again!',showConfirmButton:true});
	}else{
				
	hr.open("POST", base_url+"auth/deleteRequest", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
						$('#item'+id).hide();
 swal({type:'success',title:getObj.success,showConfirmButton:true});
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	}
}


function performClick(elemId) {
		   var elem = document.getElementById(elemId);
			if(elem && document.createEvent) {
					  var evt = document.createEvent("MouseEvents");
					  evt.initEvent("click", true, false);
					  elem.dispatchEvent(evt);
		   }
}




function addProperty(base_url,id,role){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
	        var property_title = document.getElementById('property_title').value;
	        var category = document.getElementById('category').value;
	        var type = document.getElementById('type').value;
	        var purpose = document.getElementById('purpose').value;
	        var currency = document.getElementById('currency').value;
	        var price = document.getElementById('price').value;
	        var status = document.getElementById('status').value;
	        var num_rom = document.getElementById('num_rom').value;
	        var features = document.getElementById('features').value;
	        var toilet = document.getElementById('toilet').value;
			var bathroom = document.getElementById('bathroom').value;
	        var parking = document.getElementById('parking').value;
			var land_area = document.getElementById('land_area').value;
			var property_area = document.getElementById('property_area').value;
			var state = document.getElementById('state').value;
			var property_country = 'Nigeria';
			var paymood = document.getElementById('paymood').value;
			var standard = document.getElementById('standard').value;
			var town = document.getElementById('town').value;
			var youtube = document.getElementById('youtube').value;
			var description = document.getElementById('description').value;
	        var user_unique_id = id;
	        var requst_from = role;
 	        var add_property = 'add_property';
			dbParam = "property_title="+property_title+"&category="+category+"&type="+type+"&purpose="+purpose+"&price="+price+"&status="+status+"&num_rom="+num_rom+"&features="+features+"&toilet="+toilet+"&bathroom="+bathroom+"&parking="+parking+"&land_area="+land_area+"&property_area="+property_area+"&state="+state+"&paymood="+paymood+"&standard="+standard+"&town="+town+"&youtube="+youtube+"&description="+description+"&user_unique_id="+user_unique_id+"&requst_from="+requst_from+"&add_property="+add_property+"&property_country="+property_country+"&currency="+currency;
	if( property_title=="" || category=="" || type=="" || price=="" || state=="" || town=="" || description==""){
		swal({type:'error',title:'Error! Ensure you fill all necessary fileds with (*)!',showConfirmButton:true});
	}else{	
	hr.open("POST", base_url+"auth/addProperty", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
						setTimeout(function() {
                             redirectPage(base_url+'pages/dashboard/add-property-image/'+getObj.returndata.unique_id);
             			 	}, 3000);
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	}
}


function customAlert(msg,duration) {
	var styler = document.createElement("div");
	styler.setAttribute("style","margin:auto;width:auto;height:auto;top:300px;opacity:0.8;z-index:10000;right:10%;left:70%;background-color:#0C3;position:fixed;color:#FFF;padding:20px;font-size:16px;font-family:Roboto;");
	styler.innerHTML = msg;
	setTimeout(function() {
		styler.parentNode.removeChild(styler);
	},duration);
	document.body.appendChild(styler);
}

$('#see').hide();
$('#sample').css("cursor","pointer");
$('#sample').on("click", function(){
	$('#see').slideToggle();
});


/*//CROP IMAGE START PASSPORT
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:300,
      height:300,
      type:'square' //circle
    },
    boundary:{
      width:350,
      height:350
    }
  });

  $('#theFile').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
	var userid = document.getElementById('id').value;
	var baseurl = document.getElementById('baseurl').value;
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
		
      $.ajax({
        url:baseurl+'auth/passport_update',
        type: "POST",
        data:{"crop_image": response, "userid": userid},
        success:function(data)
        {
			var getObj = JSON.parse(data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
			  if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true,timer:2200});
				  $('#pp').attr("src",getObj.src);
			  }
          $('#uploadimageModal').modal('hide');
        }
      });
    });
  });

}); 
//CROP IMAGE END PASSPORT

//CROP IMAGE START
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:400,
      height:250,
      type:'square' //circle
    },
    boundary:{
      width:400,
      height:300
    }
  });

  $('#upload_image').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
	var userid = document.getElementById('id').value;
	var baseurl = document.getElementById('baseurl').value;
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
		
      $.ajax({
        url:baseurl+'auth/thumbnail_update',
        type: "POST",
        data:{"crop_image": response, "userid": userid},
        success:function(data)
        {
			var getObj = JSON.parse(data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
			  if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true,timer:2200});
				  $('#pp').attr("src",getObj.src);
			  }
          $('#uploadimageModal').modal('hide');
        }
      });
    });
  });

}); 
//CROP IMAGE END*/


////Upload Multiple Images
$('#multiple_image').on('change',(function(e) {
	    var obj, dbParam, xmlhttp, myObj;
	    var postid = document.getElementById('id').value;
	   	var baseurl = document.getElementById('baseurl').value;
	    var error_images = '';
	    var form_data = new FormData();
	    var files = $('#multiple_image')[0].files;
	    if(files.length > 8){
			error_images += 'You can not select more than 8 image files (Max: 8)!. ';
			swal({type:'error',title:'You can not select more than 10 image files (Max: 8)! ',showConfirmButton:true}); 
	  	}else{
		 for(var i=0; i<files.length; i++){
			var name = document.getElementById("multiple_image").files[i].name;
    		var ext = name.split('.').pop().toLowerCase();
			 if(jQuery.inArray(ext, ['gif','png','jpg','jpeg']) == -1){
				error_images += 'Invalid '+i+'  file type use eg: png, jpg, jpeg, gif. ';
				swal({type:'error',title:'Invalid '+i+'  file type use eg: png, jpg, jpeg, gif',showConfirmButton:true});
    		 }else{
				var oFReader = new FileReader();	oFReader.readAsDataURL(document.getElementById("multiple_image").files[i]);
				var f = document.getElementById("multiple_image").files[i];
				var fsize = f.size||f.fileSize;
				if(fsize > 2000000){
				  error_images +=  i + ' File Size is too big (Max 2MB). ';
				  swal({type:'error',title: i + ' File Size is too big (Max 2MB)',showConfirmButton:true});
                }else{
     			  form_data.append("multFile[]", document.getElementById('multiple_image').files[i]);
    			}//check file size
			 }//check for invalid file type
		 }//for loop
		}//check length
	
	if(error_images == ''){
	    form_data.append('postid', postid);
		$.ajax({
			url: baseurl+'auth/multipleImageUpload', 
			dataType: 'text', 
			cache: false,
			contentType: false,
			processData: false,
			data: form_data,                         
			type: 'post',
			beforeSend:function(){
			swal({type:'success',title:'Uploading...',showConfirmButton:false});
            },
			success: function(php_script_response){
		    var getObj = JSON.parse(php_script_response);
			  if(getObj.error){
			  swal({type:'error',title:getObj.error,showConfirmButton:true}); 
			  }
			  if(getObj.success){ 	swal({type:'success',title:getObj.success,showConfirmButton:true,timer:1200});
				setTimeout(function() {
			   $('#load_multImg').show();
               $('#load_multImg').html(getObj.lop);				 
			   $('#loader').hide();
             }, 2000);				 
				$('#load_multImg').hide();				 
				$('#loader').show();
				
               //$('#pp').attr("src",getObj.src);
			  }
			}
		 });
	}else{
		swal({type:'error',title:'Image upload failed, Captured Errors: '+error_images,showConfirmButton:true});
	}
}));
////Upload Multiple image End

//DEL MulImage
$('#del_cam').click(function(){
	var obj, dbParam, xmlhttp, myObj;
	var postid = document.getElementById('id').value;
	var baseurl = document.getElementById('baseurl').value;
	var selected = new Array();
	$('input[name="del_mult"]:checked').each(function() {
	  selected.push(this.value);
	});
	if(selected!=''){
		$.ajax({
                    url: baseurl+'auth/deleteMultipleImages', // link of your "whatever" php
                    type: "POST",
                    async: true,
                    cache: false,
                    data: {list:selected, postid:postid}, // all data will be passed here
                    success: function(data){
				    var getObj = JSON.parse(data);
					if(getObj.error){	  swal({type:'error',title:getObj.error,showConfirmButton:true});  
					  }
					if(getObj.success){	  swal({type:'success',title:getObj.success,showConfirmButton:true,timer:1200});
						setTimeout(function() {
						   $('#load_multImg').show();
						   $('#load_multImg').html(getObj.lop);				 
						   $('#loader').hide();
						 }, 2000);				 
							$('#load_multImg').hide();				 
							$('#loader').show();
					}
						
				  }
			
				});
		
		
	}else{
	  swal({type:'error',title:'Select at least one item!',showConfirmButton:true});
	}
});
//DEL Mul End

function publishProperty(id,state,baseurl){
	if(id!='' & state!=''){
		$.ajax({
                    url: baseurl+'auth/publishProperty', 
                    type: "POST",
                    async: true,
                    cache: false,
                    data: {publishstate:state, postid:id}, 
                    success: function(data){
				    var getObj = JSON.parse(data);
					if(getObj.error){	  swal({type:'error',title:getObj.error,showConfirmButton:true});  
					  }
					if(getObj.success){	  swal({type:'success',title:getObj.success,showConfirmButton:true,timer:1900});
						setTimeout(function() {
							redirectPage(baseurl+'pages/dashboard/property-listing/All');
						 }, 2000);
					}
						
				  }
		  });
	}
}


$('#carouselExample').on('slide.bs.carousel', function (e) {

  
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;
    
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


  $('#carouselExample').carousel({ 
                interval: 2000
        });


  $(document).ready(function() {
/* show lightbox when clicking a thumbnail */
    $('a.thumb').click(function(event){
      event.preventDefault();
      var content = $('.modal-body');
      content.empty();
        var title = $(this).attr("title");
        $('.modal-title').html(title);        
        content.html($(this).html());
        $(".modal-profile").modal({show:true});
    });

  });

/*ZOOM IMAGE*/
$('.modalw').css("cursor","pointer");
function zom(id){
	// Get the modal
var modal = document.getElementById('myModal');
// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg'+id);
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("captionw");
//img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
//}
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];
// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
modal.onclick = function() { 
    modal.style.display = "none";
}
}

/*ZOOM IMAGE*/


function saveProperty(base_url,pid,agentid,userid){
			var obj, dbParam, xmlhttp, myObj, regbox;
	        var hr = new XMLHttpRequest();
			var user_unique_id = userid;
	        var agent_unique_id = agentid;
	        var property_unique_id = pid;
 	        var Save_Property = 'save';
			dbParam = "user_unique_id="+user_unique_id+"&agent_unique_id="+agent_unique_id+"&property_unique_id="+property_unique_id+"&Save_Property="+Save_Property;
	if( user_unique_id=="" || agent_unique_id=="" || property_unique_id=="" ){
		swal({type:'error',title:'Internal error occured try again later!',showConfirmButton:true});
	}else{	
	hr.open("POST", base_url+"auth/saveProperty", true);
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.onreadystatechange = function() {
		if(hr.readyState == 4 && hr.status == 200) {
			var return_data = hr.responseText;
			var getObj = JSON.parse(return_data);
			  if(getObj.error){
 swal({type:'error',title:getObj.error,showConfirmButton:true});  
			  }
					if(getObj.success){
 swal({type:'success',title:getObj.success,showConfirmButton:true});
					}
		}
	}
	hr.send(dbParam); // Actually execute the request			
	swal({type:'success',title:'Processing..',showConfirmButton:false});
	}
}