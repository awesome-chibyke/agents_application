<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 60px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                </div>
             
                <!-- Contact Form Area -->
                <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
                    <div class="row">
                     <div class="contact-heading" style="margin: 0px; padding-left: 30px;">
                        <h6> My Saved Property</h6>
                    </div>
                      <div class="col-lg-12">
                      
                  <?php //print_r($property_data); 
						  if($property_data>0){
				for($i=0;$i<count($property_data);$i++){?>
				<?php if($i==0){?>
				  <h6 align="left"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6>
				<?php }?>
				
				<div id="item26" class="listings-content set-listing shadow add-top-design">
                   <?php if($property_data[$i][0]['subscription']==1){?>
                        <div class="tag-item">
                                <span> Basic</span>
                            </div>
                         <?php }else if($property_data[$i][0]['subscription']==2){?>
                          <div class="tag-item2">
                                <span> Featured </span>
                            </div>
                            <?php }else if($property_data[$i][0]['subscription']==3){?>
                            <div class="tag-item3">
                                <span> Featured Plus </span>
                            </div>
                            <?php }?>
                            
                        <div style="padding-top: 30px;" class="list-p">
                            <br />
                        </div>
                        
                     <span class="location">
                        <h6> <i class="fa fa-star fa-spin text-success"></i>
                         <?php print $property_data[$i][0]['property_purpose'];?>
                         <?php print $property_data[$i][0]['property_type'];?> 
                         <?php print $property_data[$i][0]['property_category'];?>: <?php print $property_data[$i][0]['property_title'];?></h6>
                         <hr>
                     </span>
                 
                  <div class="row">
                        <div  class="col-lg-3">
                        
                        	<img id="myImg<?php print $property_data[$i][0]['id'];?>" class="myImg" onClick="zom('<?php print $property_data[$i][0]['id'];?>')" src="<?php print base_url();?>property_upload/<?php print $property_data[$i][0]['property_thumbnail'];?>" alt="<?php print $property_data[$i][0]['property_title'];?>">
                        	
                        	<span style="width: 100%; float: left; padding: 10px; align-text: center;"><i class="fa fa-camera"></i> 
                        	<?php print count(explode(",",$property_data[$i][0]['property_images']))-1;?> photos
							
							</span>
							
                        </div>
                       <div class="col-lg-9">
						   <span>PID: <?php print $property_data[$i][0]['unique_id'];?></span>
                        <span style="width: 100%; text-align: justify">
                        <span class="set-so">
                        <h5 style="font-size: 16px;">
                        <img src="<?php print base_url();?>img/icons/location.png" alt="">
                        <?php print $property_data[$i][0]['property_city'];?>: <?php print $property_data[$i][0]['property_location'];?></h5>
                        <?php if($property_data[$i][0]['last_update']==""){?>
                        <strong>Added Date:</strong> <?php print $property_data[$i][0]['post_date'];?>
                        <?php }else{?>
                        <strong>Last Update:</strong> <?php print $property_data[$i][0]['last_update'];?>
                        <?php }?>
                         </span>
                        <br />
                        <span style="font-size: 12px;">
                        <?php print $reduce_text_lent($property_data[$i][0]['property_description'], 400);?>
                        </span> <br />
                        
                        </span>
                        <div style="font-size: 20px;" class="list-price text-primary"><p><hr><?php if($property_data[$i][0]['currency']=='NG'){print '₦';}else{print '$';};?>
                                <?php print number_format($property_data[$i][0]['property_price']);?> (<?php print $property_data[$i][0]['payment_type'];?>)</p></div>
                       </div>
                     </div>
                        <!-- Meta -->
                     <div style="background:#F8F5F5; padding: 5px;" class="property-meta-data d-flex align-items-end">
                          <?php if($property_data[$i][0]['property_type']!='Land'){?>
                           <div class="garage boda-rit ">
                           	<i class="fa fa-bed"></i>  
                           	<span class="font-set"><?php print $property_data[$i][0]['no_of_rooms'];?> Rooms</span>                           </div>
                            <div class="garage boda-rit ">
                                <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $property_data[$i][0]['no_of_toilets'];?> Toilets</span>
                            </div>
                            <div class="bathroom boda-rit">
                               <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $property_data[$i][0]['no_of_bathrooms'];?> Bathrooms</span>
                            </div>
                             <?php }else{?>
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/space.png" alt="">
                                    <span><?php print $property_data[$i][0]['total_land_area'];?> sqm Total Area</span>
                                </div>
                                <?php }?>
                     </div>
				    <div style="width: 100%; padding-top: 10px;">
				    	<spanpull-left>Published By: <?php print $user_data['company_name'];?> <img src="<?php print base_url();?>company_logo/<?php print $user_data['company_logo'];?>" width="40" height="30" alt=""> </span>
						<span  class="pull-right">
							<a style="color: #E37F1C;" href="<?php print base_url();?>pages/view/detailed/<?php print $property_data[$i][0]['id'];?>/<?php print str_replace(" ","-",$property_data[$i][0]['property_title']);?>">+Details</a>
						</span>
				    </div>
               	<hr>
                       
                                
                 </div> 
					
         <?php }?>    
      <?php }else{ ?>
		<div class="col-12"><h6 align="left"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6></div>
	<?php				
		print '<h1>No property listing for your search category was found.</h1>';
	}?>

                   <div class="main">
					  <div id="content">
                       <div id="pagination">
						<ul class="tsc_pagination">
                        <?php foreach ($links as $link) {
						   	echo "<li>". $link."</li>";
						 }?>
						</ul>
					  </div>
                    </div>
                  </div>
                    
                     
                       
				   </div>
                  </div>
                </div>
            </div>
        </div>
    </section>