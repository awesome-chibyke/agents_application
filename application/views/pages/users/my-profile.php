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
					  <div class="alert alert-info">My Profile 
						   
						 </div>
						</div>
					   </div>
                    
                     <div class="col-lg-3">
                     	<h6 align="center">
                     	<img id="pp" class="img-responsive" src="<?php print base_url();?>upload/<?php print $user_data['passport']?>"></h6>
                     
						<button onClick="performClick('theFile')" class="btn btn-block btn-danger">Update Passport</button>
                    	<input style="visibility:hidden; width:0px; margin-right:2px;" value="" name="file" type="file" id="theFile" />
                    	<input value="<?php print base_url();?>" id="baseurl" type="hidden" name="baseurl" />
                    	<input id="id" value="<?php print $user_data['unique_id'];?>" type="hidden" name="id" />
                     	<br />
                     </div>
                     
                      <div class="col-lg-9">
                     	<form action="" enctype="multipart/form-data"  method="post">
                          <div class="row">
                           <div class="col-lg-6">
                            <div class="form-group">
                               <label>First Name* </label>
                                <input value="<?php print @$user_data['first_name'];?>" type="text" class="form-control" name="fname" id="fname" placeholder="Your First Name*">
                            </div></div>
                            <div class="col-lg-6">
                            <div class="form-group">
                               <label>Last Name* </label>
                                <input value="<?php print @$user_data['last_name'];?>" type="text" class="form-control" name="lname" id="lname" placeholder="Your Last Name*">
                            </div></div>
                          </div>
                           
                           <div class="row">
                           <div class="col-lg-6">
                            <div  class="form-group">
                            <label>Sex* </label>
								<select class="form-control"  name="sex" id="sex">
								<?php $sex = $user_data['sex'];?>
									  <option selected="selected" value="">Select your Sex</option>
									  <option <?php if($sex=='Male') echo 'selected="selected"';?> value="Male">Male</option>
									  <option <?php if($sex=='Female') echo 'selected="selected"';?> value="Female">FeMale</option>
								</select>
							</div></div>
                            <div class="col-lg-6">
                           <div class="form-group">
                               <label>Email* </label>
                                <input readonly value="<?php print @$user_data['email'];?>" type="email" class="form-control" name="email" id="email" placeholder="Your Email* (eg: name@gmail.com)">
                            </div></div>
                          </div>
                            
                            <div class="form-group">
                               <label>Phone Number* (eg: +234 8034 523 458) </label>
                                <input name="phone"  value="<?php print @$user_data['phone'];?>" id="phone"  type="text" class="form-control bfh-phone" data-format="+234 dddd ddd ddd">
                            </div>
                            <div class="form-group">
                               <label>Address </label>
                                <textarea class="form-control" name="address" id="address" placeholder="Your Address"><?php print @$user_data['address'];?></textarea>
                            </div>
                            
                            <div class="row">
                           <div class="col-lg-6">
                            <div class="form-group">
                               <label>State </label>
                                <input value="<?php print @$user_data['state_of_origin'];?>" type="text" class="form-control" name="state" id="state" placeholder="Your State">
                            </div></div>
                            <div class="col-lg-6">
                            <div class="form-group">
                            <label>Nationality </label>
                            <select name="country" id="country" class="form-control">
                              <?php $countr= $user_data['nationality'];?>
                            <option value="" selected="selected">--Select Country--</option>
                            <?php for($i=0;$i<count($country);$i++){?>
                            <option <?php if($countr==$country[$i])echo 'selected="selected"';?> value="<?php echo $country[$i];?>"><?php echo $country[$i];?></option>
							<?php }?>
						   </select>
                            </div></div>
                            <div class="col-lg-12">
                            <div class="form-group">
                               <label>Account Type </label>
                                <?php $rol= $user_data['role'];?>
						   <select class="form-control" name="role" id="role">
					         <option value="" selected="selected">--Account Type--</option>
						     <option <?php if($rol=='user') echo 'selected="selected"';?> value="user">User</option>
							 <option <?php if($rol=='agent') echo 'selected="selected"';?> value="agent">Agent</option>
							 <option <?php if($rol=='builder') echo 'selected="selected"';?> value="builder">Builder</option>
							 <option <?php if($rol=='owner') echo 'selected="selected"';?> value="owner">Owner</option>
						   </select>
                            </div>
                          </div>
                        </div>
                            <span onClick="updateUser('<?php print base_url();?>')" name="reg-user" type="submit" class="btn south-btn">Update Profile </span>
                            
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