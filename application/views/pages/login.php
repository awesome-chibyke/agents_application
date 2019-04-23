  <?php $checkLoginOut();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 100px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                   <div class="contact-heading">
                        <h6><i class="fa fa-user text-success"></i> Login Now!</h6>
                    </div>
                  <!--<div class="contact-heading text-center">
                        <h6>Register Now And Get Update Of New Accomodation In Your Area!</h6>
                    </div>-->
                </div>
            </div>

            <div class="row">
                <div class="hidden-xs col-12 col-lg-4 wow fadeInUp" data-wow-delay="1500ms">
                    <div class="content-sidebar">
                       
                        <!-- Office Hours -->
                        <div style="margin-top: -50px;" class="weekly-office-hours">
                           <img class="img-responsive" src="<?php print base_url();?>img/new/login.jpg">
                        </div>
                        <!-- Address -->
           
                    </div>
                </div>

                <!-- Contact Form Area -->
                <div style="margin-top: -50px;" class="col-12 col-lg-8 wow fadeInUp" data-wow-delay="750ms">
                   <div style="box-shadow: 0 4px 8px 0 rgba(0, 90, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="alert alert-default"><i class="fa fa-warning"></i> Login now to create a session and start enjoying our constant updates.</div>
                    <div class="contact-form">
                     
                     <?php print validation_errors('<div class="alert alert-danger top-5 bottom-5 pad-10">', '</div>');?>
                       <?php if (isset($_SESSION['success'])) {?>
						<div class="alert alert-success top-5 bottom-5 pad-10"><span class="fa fa-checked"></span>&nbsp; <?php print $_SESSION['success'];?></div><?php } ?>
                       
                       <?php if (isset($_SESSION['error'])) {?>
						<div class="alert alert-danger top-5 bottom-5 pad-10"><span class="fa fa-warning"></span>&nbsp; <?php print $_SESSION['error'];?></div><?php } ?>
                     
                     
                      <form action="" enctype="multipart/form-data" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" name="login_email" id="login_email" placeholder="Your Email(eg: name@gmail.com)">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="login_pass" id="login_pass" placeholder="Your Password">
                            </div>
                            <div class="form-group">
								<label class="space-1">Remember me &nbsp;<span class="fa fa-caret-right"></span> &nbsp;
                           <input style="vertical-align:top;" type="checkbox" name="login_rem" id="login_rem"></label>
                            </div>
                            <span onClick="login('<?php print base_url();?>')" type="submit" class="btn south-btn">Login Now!</span><br />
                            <a href="<?php print base_url();?>user-register"><u>Don`t Have account</u></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>