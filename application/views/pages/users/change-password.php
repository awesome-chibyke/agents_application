<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 50px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <div class="col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                </div>

                <!-- Contact Form Area -->
                <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
                  <div class="row">
                      <div class="col-lg-8">
                     	<form action="" enctype="multipart/form-data"  method="post">
                          <div class="form-group">
                               <label>Old Password* </label>
                                <input type="password" class="form-control" name="oldpass" id="oldpass" placeholder="Your Old Password">
                            </div>
                           <div class="form-group">
                               <label>New Password* </label>
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password">
                            </div>
                            <div class="form-group">
                               <label>Confirm New Password* </label>
                                <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Your Confirm Password">
                                
                                <input id="id" value="<?php print $user_data['unique_id'];?>" type="hidden" name="id" />
                            </div>
                        
                      
                            <span onClick="updatePassword('<?php print base_url();?>')" name="reg-user" type="submit" class="btn south-btn">Update Password </span>
                            
                        </form>
                     </div>
                     <div class="col-lg-4 hidden-xs"><img src="<?php print base_url();?>img/new/change-password.png" /></div>
                  </div> 
                    
                </div>
            </div>
        </div>
    </section>