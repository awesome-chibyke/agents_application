<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 70px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <!--<div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                 <?php //$this->load->view('pages/users/sidebar');?> 
                </div>-->
                <!-- Contact Form Area -->
                <div style="margin-top: ;" class="col-12 col-lg-12 wow fadeInUp inner-shad" data-wow-delay="750ms">
                  <div class="row">
                    <div class="contact-heading" style="margin: 0px; width: 100%;">
					 <div  class="col-lg-12">
					  <div class="alert alert-info">Company Informations
						   
						 </div>
						</div>
					   </div>
                    
                     <div class="col-lg-3">
                     	<h6 align="center">
                     	<img id="pp" class="img-responsive" src="<?php print base_url();?>company_logo/<?php print $user_data['company_logo']?>"></h6>
                     
						<button onClick="performClick('theFile')" class="btn btn-block btn-danger">Update Logo</button>
                    	<input style="visibility:hidden; width:0px; margin-right:2px;" value="" name="file" type="file" id="theFile" />
                    	<input value="<?php print base_url();?>" id="baseurl" type="hidden" name="baseurl" />
                    	<input id="id" value="<?php print $user_data['unique_id'];?>" type="hidden" name="id" />
                     	<br />
                     </div>
                     
                      <div class="col-lg-9">
                     	<form action="" enctype="multipart/form-data"  method="post">
                          <div class="row">
                           <div class="col-lg-12">
                            <div class="form-group">
                               <label>Company Name* </label>
                                <input value="<?php print @$user_data['company_name'];?>" type="text" class="form-control" name="cname" id="cname" placeholder="Your Company Name*">
                            </div></div>
                            <div class="col-lg-12">
                            <div class="form-group">
                               <label>Office Number* (eg: 08034523458, 08034343434) </label>
                                <input value="<?php print @$user_data['office_numbers'];?>" type="text" class="form-control" name="office_no" id="office_no" placeholder="Your Office Number*">
                            </div></div>
                          </div>
                           
                            
                            <div class="form-group">
                               <label>WhatsApp Number (eg: +234 8034 523 458) </label>
                                <input name="whatsapp_no"  value="<?php print @$user_data['whatsapp_number'];?>" id="whatsapp_no"  type="text" class="form-control bfh-phone" data-format="+234 dddd ddd ddd">
                            </div>
                            
                            <div class="form-group">
                               <label>Office Address* </label>
                                <textarea class="form-control" name="offic_address" id="offic_address" placeholder="Your Office Address*"><?php print @$user_data['office_address'];?></textarea>
                            </div>
                            
                            <div class="form-group">
                               <label>Base Area </label>
                                <textarea class="form-control" name="base_area" id="base_area" placeholder="Your Base Area"><?php print @$user_data['based_area'];?></textarea>
                            </div>
                              
                            <div class="form-group">
                               <label>Website URL (eg: https://domainname.com)</label>
                                <textarea class="form-control" name="website" id="website" placeholder="Website URL"><?php print @$user_data['website'];?></textarea>
                            </div>
                            
                            <div class="form-group">
                               <label>Facebook Link (eg: https://facebook.com/username) </label>
                                <textarea class="form-control" name="facebook_link" id="facebook_link" placeholder="Facebook Link"><?php print @$user_data['facebook_link'];?></textarea>
                            </div>
                            
                            <div class="form-group">
                               <label>Twitter Link (eg: https://twitter.com)</label>
                                <textarea class="form-control" name="twitter_link" id="twitter_link" placeholder="Twitter Link"><?php print @$user_data['twiter_link'];?></textarea>
                            </div>
                            
                            <div class="form-group">
                               <label>Company Map Embeded Link from Google <em>(Help people find you easily)</em></label> e.g. <textarea readonly style="border: #FFFFFF solid 0px; font-size: 10px; height: 55px;" class="form-control"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15859.0465440136!2d7.496444!3d6.424664!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe987d1562f9f3d1e!2sTecho+Craft!5e0!3m2!1sen!2sng!4v1552700298220" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></textarea>
                               (Note: change width="100%" height="400")
                              
                              <textarea style="height: 100px;" class="form-control" name="mapp" id="mapp" placeholder="Paste map link here"><?php print @$user_data['map'];?></textarea>
                            </div>
                            
                            <div class="contact-form">
								<div class="form-group">
								   <label>Agents Comments <em>(Tell people about your services)</em> </label>
									<textarea class="form-control" name="agents_comment" id="agents_comment" placeholder="Your Comments"><?php print @$user_data['agents_comment'];?></textarea>
								</div>
                            </div>
                            
                            
                            
                          <div style="display: none;" class="col-lg-6">
                           <div class="form-group">
                               <label>Email* </label>
                                <input readonly value="<?php print @$user_data['email'];?>" type="email" class="form-control" name="email" id="email" placeholder="Your Email* (eg: name@gmail.com)">
                            </div>
                          </div>
                            
                            <span onClick="updateCompanyInfo('<?php print base_url();?>')" type="submit" class="btn south-btn">Update Company Info </span>
                            
                        </form>
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