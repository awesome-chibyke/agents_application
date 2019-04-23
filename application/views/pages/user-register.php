  <?php $checkLoginOut();?>
   <section class="south-contact-area section-padding-100">
	  <div style="padding-top: 100px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="contact-heading">
                        <h6><i class="fa fa-user text-success"></i> USERS REGISTRATION</h6>
                    </div>
                  <!--  <div class="contact-heading text-center">
                        <h6>Register Now And Get Update Of New Accomodation In Your Area!</h6>
                    </div>-->
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-12 col-lg-4 wow fadeInUp" data-wow-delay="1500ms">
                    <div class="content-sidebar">
                       <small>Hi we are here for you all you need to do is to register with us to get updates on available accomodaion in your area. Feel free to contact us. <i class="text-success fa fa-arrow-down fa-spin"></i></small>
                        <!-- Office Hours -->
                        <div class="weekly-office-hours">
                           <img class="img-responsive" src="<?php print base_url();?>img/new/house.jpg">
                        </div>
                        <!-- Address -->
                        <div class="address mt-30">
                            <h6><img src="img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                            <h6><img src="img/icons/envelope.png" alt=""> office@template.com</h6>
                            <h6><img src="img/icons/location.png" alt=""> Main Str. no 45-46, b3, 56832,<br>Los Angeles, CA</h6>
                        </div>
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div style="margin-top: -50px;" class="col-12 col-lg-8 wow fadeInUp" data-wow-delay="750ms">
                   <div style="box-shadow: 0 4px 8px 0 rgba(0, 90, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="alert alert-default"><i class="fa fa-warning"></i> Please ensure you are providing the correct informations to help us serve you better.</div>
                    <div class="">
                       <?php print validation_errors('<div class="alert alert-danger top-5 bottom-5 pad-10">', '</div>');?>
                       <?php if (isset($_SESSION['success'])) {?>
						<div class="alert alert-success top-5 bottom-5 pad-10"><span class="fa fa-warning"></span>&nbsp; <?php print $_SESSION['success'];?></div><?php } ?>
                       
                       <?php if (isset($_SESSION['error'])) {?>
						<div class="alert alert-danger top-5 bottom-5 pad-10"><span class="fa fa-check"></span>&nbsp; <?php print $_SESSION['error'];?></div><?php } ?>
                       
                        <form action="" enctype="multipart/form-data"  method="post">
                           <div class="contact-form">
                            <div class="form-group">
                                <input type="text" class="form-control" name="fname" id="fname" placeholder="Your First Name*">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="lname" id="lname" placeholder="Your Last Name*">
                            </div></div>
                            <div class="form-group">
								<select name="sex" id="sex" class="form-control">
								<option value="" selected="selected">--Select Sex*--</option>
								<option value="Male">Male</option>
								<option value="Female">Female</option>
								</select>
							</div>
                           <div class="contact-form">
                            <div class="form-group">
                               <label>Phone Number* (eg: +234 8034 523 458)</label>
                                <input name="phone" id="phone"  type="text" class="form-control bfh-phone" data-format="+234 dddd ddd ddd">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email* (eg: name@gmail.com)">
                            </div>
                            
                            <div class="form-group">
                                <textarea class="form-control" name="address" id="address" placeholder="Your Address"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="pass" id="pass" placeholder="Your Password*">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="cpass" id="cpass" placeholder="Your Confirm Password*">
                            </div>
                          </div>
                          <div class="form-group">
                             <label>Account Type </label>
							   <select class="form-control" name="role" id="role">
								 <option value="" selected="selected">--Account Type--</option>
								 <option value="user">User</option>
								 <option value="agent">Agent</option>
								 <option value="builder">Builder</option>
								 <option value="owner">Owner</option>
							   </select>
                            </div>
                            <div class="contact-form">
                            <span onClick="users_reg('<?php print base_url();?>')" name="reg-user" type="submit" class="btn south-btn">Register Now!</span><br />
                             <a href="<?php print base_url();?>login"><u>Already Have An account</u></a>
                             </div>
                        </form>
					</div>
                </div>
            </div>
        </div>
    </section>