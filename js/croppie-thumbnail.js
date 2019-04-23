// JavaScript Document

//CROP IMAGE START
$(document).ready(function(){

	$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:800,
      height:350,
      type:'square' //circle
    },
    boundary:{
      width:"100%",
      height:450
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
 swal({type:'success',title:getObj.success,showConfirmButton:true});
				  $('#pp').attr("src",getObj.src);
			  }
          $('#uploadimageModal').modal('hide');
        }
      });
    });
  });

}); 
//CROP IMAGE END
