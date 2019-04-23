<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 100px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                <?php //print_r($as);?>
                </div>
                
                <!-- Contact Form Area -->
              <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
                  <div class="row">
                   <div class="contact-heading" style="margin: 0px; width: 100%;">
					 <div  class="col-lg-12">
					  <div class="alert alert-info inner-sh">Add Property Completed 
						   
						 </div>
						</div>
					   </div>
                      <div  class="col-lg-12">
                          <div class="row">
                         
                      <div class="col-lg-12" align="center">
                           <h2>Thank you. Your Property was listed successfully. For people to start seeing your listing you have to publish it.</h2>
                           <i onClick="publishProperty('<?php print $id;?>','publish','<?php print base_url();?>')" class="fa fa-publish btn btn-success font-in"> Publish Now!</i>
                           <i onClick="publishProperty('<?php print $id;?>','unpublish','<?php print base_url();?>')" class="fa fa-publish btn btn-primary font-in"> Publish Later</i>
                           </div>
                           
                          </div>
                        
                       
                     </div>
                  </div>
                </div>
            </div>
        </div>
    </section>
    
   
  <div style="z-index: 10000000" id="uploadimageModal" class="modal" role="dialog">
	<div class="modal-dialog">
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
       		    <button class="btn btn-success crop_image">Crop & Upload Image</button>
        		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      		</div>
    	</div>
    </div>
</div>