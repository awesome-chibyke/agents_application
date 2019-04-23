<div class="content-sidebar sider">
                   <div class="contact-heading" style="margin: 0px; padding: opx;">
                        <h6><i class="fa fa-user text-success"></i> Members Area!</h6>
                    </div>
                       
                        <!-- Office Hours -->
                        <div class="hidden-xs weekly-office-hours">
                         <li class="style-list"><i class="fa fa-dashboard"></i> <a class="<?php print @$activa10;?>" href="<?php print base_url();?>users/home">My Dashboard</a></li>
                         
                         <!--Agent SIde open-->
                         <?php if($user_data['role']!='user'){?>
                         <li class="style-list"><i class="fa fa fa-book"></i> <a class="<?php print @$activa16;?>" href="<?php print base_url();?>users/add-property">Add Property</a></li>
                         
                         <li class="style-list"><i class="fa fa fa-book"></i> <a class="<?php print @$activa17;?>" href="<?php print base_url();?>pages/dashboard/property-listing/All">Property Listing</a></li>
                         
                         <li class="style-list"><i class="fa fa-comment"></i> <a class="<?php print @$activa18;?>" href="<?php print base_url();?>users/subscription">My Subscription</a></li>
                         <?php }?>
                         <!--Agent SIde end-->
                          <li class="style-list"><i class="fa fa-user"></i> <a class="<?php print @$activa11;?>" href="<?php print base_url();?>users/my-profile">My Profile</a></li>
                          <?php if($user_data['role']!='user'){?>
                          <li class="style-list"><i class="fa fa-user"></i> <a class="<?php print @$activa111;?>" href="<?php print base_url();?>users/company-info"> My Company Info</a></li>
                          <?php }?>
                          <li class="style-list"><i class="fa fa-lock"></i> <a class="<?php print @$activa12;?>" href="<?php print base_url();?>users/change-password">Change Password</a></li>
                          
                          <li class="style-list"><i class="fa fa-comment"></i> <a class="<?php print @$activa13;?>" href="<?php print base_url();?>users/make-request">Make Request</a></li> 
                          <li class="style-list"><i class="fa fa-comment"></i> <a class="<?php print @$activa14;?>" href="<?php print base_url();?>req/my-request">My Request</a></li>
                          
                          <li class="style-list"><i class="fa fa-heart"></i> <a class="<?php print @$activa15;?>" href="<?php print base_url();?>req/saved-property">Saved Property</a></li>
                          
                          <li class="style-list"><i class="fa fa-sign-out"></i> <a  href="<?php print base_url();?>auth/endsession">Sign Out</a></li>
                        </div>
                        <!-- Address -->
                    </div>