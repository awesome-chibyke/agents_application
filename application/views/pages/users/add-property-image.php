<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 50px;" class="container hidden-xs"></div>
        <div class="container">
         <div class="row">
           
                <!-- Contact Form Area -->
              <div style="margin-top: ;" class="col-12 col-lg-12 wow fadeInUp" data-wow-delay="750ms">
                  <div class="row">
                   <div class="contact-heading" style="margin: 0px; width: 100%;">
                   
					 <div  class="col-lg-12">
					<div class="alert alert-info inner-sh">Add Property Image(s) (STEP 2) 
						 </div>
						</div>
                     </div>
                      <div  class="col-lg-12">
                      <div class="row"><div id="is" class="alert alert-success"></div></div>
                     	<form id="isme" action="" enctype="multipart/form-data"  method="post">
                          <div class="row">
                           <div style="margin-bottom: 40px;" class="col-lg-3">
                          	 <div id="imgHy" class="imag-box-file">
                           	 <div class="show_me" onClick="performClick('upload_image')">
                           		<span id="uploaded_image"><img id="pp" class="" src="<?php print base_url();?>property_upload/<?php print $property_data['property_thumbnail']?>">
                           		</span>
                           		<span class="hoverImg">Browse Thumbnail</span>
                           	 </div>
                           	<input style="display: none;" type="file" name="upload_image" id="upload_image" />
                           	<input id="id" value="<?php print $id;?>" type="hidden" name="id" />
                           	<input id="baseurl" value="<?php print base_url();?>" type="hidden" name="baseurl" />
                           	<!--<p>Note: you can select multiple image</p>-->
                           	<input style="display: none;" type="file" name="multiple_image" id="multiple_image" multiple />
                           	

                         </div>
                     </div>
                 <div class="col-lg-9">
                    <div class="row">
						<div class="imag-box">
						 <div class="top-imag-box">Upload Property Images (Limit 8 images)</div>
						 <div class="pre-scrollable image-content-box">
						 <div class="container-fluid">
						 <div id="load_multImg" class="row">
							 <?php print $multi_image;?>
						 </div>	
						 <div id="loader" class="row">
							<span class="loader-box"><img width="50" height="50" id="pp" class="" src="<?php print base_url();?>img/loader/ajax-loader.gif"></span>
						  </div>	
						 </div>
						</div>
						 <div class="bottom-imag-box">
						 <span>
                            <i id="del_cam" class="fa fa-trash  font-in"></i> </span>
                                 	
                                 <span class="pull-right">
                                 	<a href="<?php print base_url();?>pages/dashboard/add-property-done/<?php print $id;?>"><i class="font-in fa fa-save "> Save</i></a>
                                 </span>
                                <span class="pull-right" style="margin-right: 10px;" onClick="performClick('multiple_image')">
                                 	 <i id="cam" class="font-in fa fa-camera "></i>
								  </span>
                                  
                                 </div>
                                </div>
                                
                             </div>
                           
                           </div>
                           
                          </div>
                        
                        </form>
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    
   
  <div style="z-index: 10000000" id="uploadimageModal" class="modal" role="dialog">
	<div style="max-width: 65vw !important; max-height: 70hw !important;" class="modal-dialog">
		<div class="modal-content">
      		<div class="modal-header">
        		<button type="button" class="close pull-left" data-dismiss="modal">&times;</button>
      		</div>
      		<div class="modal-body">
        		<div class="row">
  					<div class="col-md-12 text-center">
						  <div id="image_demo" style="width:100%; margin-top:30px"></div>
  					</div>
				</div>
      		</div>
      		<div class="modal-footer">
       		    <button class="btn btn-success crop_image"><!--Crop & -->Upload Image</button>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>