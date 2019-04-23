  <footer class="footer-area section-padding-50-0 bg-img gradient-background-overlay" style="background-image: url(<?php print base_url();?>img/bg-img/cta.jpg);">
        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <!--<h6>About Us</h6>-->
                            </div>

                            <img src="<?php print base_url();?>img/new/about.png" alt="">
                           
                            <!--<p>Integer nec bibendum lacus. </p>-->
                        </div>
                    </div>

                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <!-- Widget Title -->
                            <div class="widget-title">
                                <h6>Office Hours</h6>
                            </div>
                            <!-- Office Hours -->
                            <div class="weekly-office-hours">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between"><span>Monday - Friday</span> <span>9:00 AM - 5:00 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Saturday</span> <span>10:00 AM - 2:00 PM</span></li>
                                    <li class="d-flex align-items-center justify-content-between"><span>Sunday</span> <span>Closed</span></li>
                                </ul>
                            </div>
                            <!-- Address -->
                           
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <div class="widget-title">
                                <h6>Site Links</h6>
                            </div>
                             <div class="address">
                                <h6><img src="<?php print base_url();?>img/icons/phone-call.png" alt=""> <?php print $siteInfo['sitePhone1'];?></h6>
                                <h6><img src="<?php print base_url();?>img/icons/envelope.png" alt=""> <?php print $siteInfo['siteEmail1'];?></h6>
                                <h6><img src="<?php print base_url();?>img/icons/location.png" alt="">
                                <?php print $siteInfo['address'];?> </h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-xl-3">
                        <div class="footer-widget-area mb-100">
                            <div class="">
                              <h6 align="center" class="text-white">Download our Mobile App.</h6>
                            </div>
                            <div class="">
                                <div class="single-featured-properties-slide">
                                    <a href="#"><img src="<?php print base_url();?>img/new/app-play-store-logo.png" alt=""><br /></a>
                                </div>
                               <div class="single-featured-properties-slide">
                                    <a href="#"><img src="<?php print base_url();?>img/new/Download_on_the_App_Store.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-12" style="padding-top: 20px;">
                            	<h6 align="center"><i class="fa fa-facebook btn btn-primary"></i>
                            	<i class="fa fa-twitter btn btn-primary"></i>
                            	<i class="fa fa-linkedin btn btn-primary"></i>
                            	<i class="fa fa-youtube btn btn-primary"></i>
                            	<i class="fa fa-instagram btn btn-primary"></i></h6>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    <div class="copywrite-text d-flex align-items-center justify-content-center">
<p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <?php print $siteInfo['domain1'];?> <i class="fa fa-heart-o" aria-hidden="true"></i> Powerd by <a style="color: #39D832;" href="https://techocraft.com">Techo Craft</a>
        </div>
    </footer>
    <script src="<?php print base_url();?>js/jquery/jquery-2.2.4.min.js"></script>
    <script src="<?php print base_url();?>js/popper.min.js"></script>
    <script src="<?php print base_url();?>js/bootstrap.min.js"></script>
    <script src="<?php print base_url();?>js/plugins.js"></script>
    <script src="<?php print base_url();?>js/classy-nav.min.js"></script>
    <script src="<?php print base_url();?>js/jquery-ui.min.js"></script>
    <script src="<?php print base_url();?>js/active.js"></script>
    <script src="<?php print base_url();?>js/sweetalert2.min.js"></script>
	<script src="<?php print base_url();?>js/script.js"></script>
    <script src="<?php print base_url();?>js/wow.min.js"></script>
    <script src="<?php print base_url();?>js/bootstrap-formhelpers.min.js"></script>
    <script src="<?php print base_url();?>js/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
    <script src="<?php print base_url();?>js/croppie.js"></script>
</body>
</html>