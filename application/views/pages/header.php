<?php
//$checkLogin();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php print $title;?></title>
    <link rel="icon" href="<?php print base_url();?>img/core-img/favicon.ico">
    <link rel="stylesheet" href="<?php print base_url();?>style.css">
    <link rel="stylesheet" href="<?php print base_url();?>css/animate.min.css">
    <link rel="stylesheet" href="<?php print base_url();?>css/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php print base_url();?>css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="<?php print base_url();?>css/main.css">
    <link rel="stylesheet" href="<?php print base_url();?>css/croppie.css">
</head>
<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="south-load"></div>
    </div>
    <header class="header-area">
      <?php /* <!-- <div  class="top-header-area">
            <div class="h-100 d-md-flex justify-content-between align-items-center">
                <div class="email-address hidden-xs">
                    <a href="mailto:contact@mypropertyng.com">contact@mypropertyng.com</a>
                </div>
                <div style="background-color: #fff;" class="phone-number d-flex hidden-xs">
                    <div class="icon">
                        <img src="<?php //print base_url();?>img/icons/phone-call.png" alt="">
                    </div>
                    <div class="number">
                        <a href="tel:+45 677 8993000 223">+45 677 8993000 223</a>
                    </div>
                </div>
            </div>
        </div>-->*/?>

        <!-- Main Header Area -->
        <div style="box-shadow: 0 4px 8px 0 rgba(0, 90, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="main-header-area" id="stickyHeader">
            <div class="classy-nav-container breakpoint-off">
                <!-- Classy Menu -->
                <nav class="classy-navbar justify-content-between" id="southNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="<?php print base_url();?>">
                    <div class="hidden-xs logoss">
                    <img src="<?php print base_url();?>img/core-img/logo.png" alt="">
                    </div>
                    <div class="hidden-lg logoss2">
                    <img src="<?php print base_url();?>img/core-img/logo.png" alt="">
                    </div>
                    </a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>
                    <div class="classy-menu">
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span>
                            <span class="bottom"></span></div>
                        </div>
                        <div class="classynav">
                            <ul>
                                <li><a class="<?php print @$activa1;?>" href="<?php print base_url();?>">Home</a></li>
                                <li><a class="<?php print @$activa9;?>" href="<?php print base_url();?>about">About Us</a></li>
                                <li><a class="<?php print @$activa2;?>" href="#"><span class="as">Category</span></a>
                                 <?php if(@$cat==''){ @$cat='';}?>
                                  <ul class="dropdown">
                                    <?php for($i=0;$i<count($category);$i++){?>
                                        <li><a class="<?php if(str_replace(" ","-",@$cat) == str_replace(" ", "-",$category[$i]['property_category'])) print "activa";?>" href="<?php print base_url();?>pages/properties/property/<?php echo trim(str_replace(" ", "-",$category[$i]['property_category']));?>"><i class="fa fa-caret-square-o-right"></i> <?php echo $category[$i]['property_category'];?></a></li>
                                        <?php }?>
                                    </ul>
                                </li>
                                
                                <li><a class="<?php print @$activa3;?>" href="<?php print base_url();?>locations">Locations</a></li>
                                <li><a class="<?php print @$activa4;?>" href="<?php print base_url();?>agents">Agent's</a></li>
                                <li><a class="<?php print @$activa13;?>" href="<?php print base_url();?>users/make-request">Request</a></li>
                                <?php if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){?>
                               <li><a class="<?php print @$activaa;?>" href="#"><span class="as">My Account</span></a>
                                    <ul class="dropdown">
                                      <li> <a class="<?php print @$activa10;?>" href="<?php print base_url();?>users/home"><i class="fa fa-dashboard"></i> My Dashboard</a></li>
                                      
                                      <!-- Agents side -->
                                      <?php if($user_data['role']!='user'){?>
                                      <li><a class="<?php print @$activa16;?>" href="<?php print base_url();?>users/add-property"><i class="fa fa fa-book"></i> Add Property</a></li>
                                      <li><a class="<?php print @$activa17;?>" href="<?php print base_url();?>pages/dashboard/property-listing/All"><i class="fa fa fa-book"></i> Property Listing</a></li>
                                      <li> <a class="<?php print @$activa18;?>" href="<?php print base_url();?>users/subscription"><i class="fa fa-comment"></i> My Subscription</a></li>
                                      <?php }?>
                                      <!-- Agents side end-->
                                      
									  <li> <a class="<?php print @$activa11;?>" href="<?php print base_url();?>users/my-profile"><i class="fa fa-user"></i> My Profile</a></li>
									  <?php if($user_data['role']!='user'){?>
									  <li> <a class="<?php print @$activa111;?>" href="<?php print base_url();?>users/company-info"><i class="fa fa-user"></i> My Company Info</a></li>
									  <?php }?>
									  <li> <a class="<?php print @$activa12;?>" href="<?php print base_url();?>users/change-password"><i class="fa fa-lock"></i> Change Password</a></li>
									  <li><a class="<?php print @$activa13;?>" href="<?php print base_url();?>users/make-request"><i class="fa fa-comment"></i> Make Request</a></li>
									  <li> <a class="<?php print @$activa14;?>" href="<?php print base_url();?>req/my-request"><i class="fa fa-comment"></i> My Request</a></li>
									  <li> <a class="<?php print @$activa15;?>" href="<?php print base_url();?>req/saved-property"><i class="fa fa-heart"></i> Saved Property</a></li>
									  <li> <a href="<?php print base_url();?>auth/session"><i class="fa fa-sign-out"></i> Sign Out</a></li>
                                    </ul>
                                </li><?php }?>
                                
                                <?php if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){ ?><?php }else{?>
                                <li><a class="<?php print @$activa6;?>" href="<?php print base_url();?>contact-us">Contact</a></li>
                                <li><a class="<?php print @$activa7;?>" href="<?php print base_url();?>user-register"><i class="fa fa-sign-in"></i> Register</a></li>
                                <li><a class="<?php print @$activa8;?>" href="<?php print base_url();?>login"> <i class="fa fa-lock"></i> Login</a></li>
                                <?php }?>
                                <?php if(isset($_SESSION['logger'])&&!empty($_SESSION['logger'])){ ?>
                                <li><a href="<?php print base_url();?>auth/endsession"> <i class="fa fa-sign-out"></i> Logout</a></li>
                                <?php }?>
                            </ul>
                            <div class="south-search-form">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search Anything ...">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <a href="#" class="searchbtn"><i class="fa" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>