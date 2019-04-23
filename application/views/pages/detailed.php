  <section class="listings-content-wrapper section-padding-100">
       <div style="padding-top: 30px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                  
                   <div style="padding-top: 30px;">
                      
                   <div style="background: #1688ae; color: #fff;" class="alert shadow col-12 hidden-xs">
                    
						  <h5><span class="text-left" style="color: #fff;"><?php print $singlePostInfo['property_purpose'];?>
							<?php print $singlePostInfo['property_type'];?>
							<?php print $singlePostInfo['property_category'];?>
							  </span>
							<span class="pull-right hidden-xs" style="color: #fff;"><?php  if($singlePostInfo['currency']=='NG'){print '₦';}else{print '$';} print number_format($singlePostInfo['property_price']);?></span>
							</h5>
					</div>
							<i class="fa fa-map-marker"></i> <?php print $singlePostInfo['property_location'].','.$singlePostInfo['property_city'];?>
							<h4 class="hidden-xs"><?php print $singlePostInfo['property_title'];?></h4>
                       		<h5 class="hidden-lg"><?php print $singlePostInfo['property_title'];?></h5>
						  
                      
                            <div class="single-listings-sliders owl-carousel setImageDis">
                              <img id="myImg<?php print $singlePostInfo['id'];?>"  class="img-responsive myImg" src="<?php print base_url();?>property_upload/<?php print $singlePostInfo['property_thumbnail'];?>" alt="<?php print $singlePostInfo['property_title'];?>" onClick="zom('<?php print $singlePostInfo['id'];?>')">
                                
                           <?php 
								$imgItems = explode(",", $singlePostInfo['property_images']);
								if(count($imgItems)==1){
									$cot = count($imgItems);
								}else{
									$cot = count($imgItems)-1;
								}
							for($i=0; $i<$cot; $i++){?>
								
									<img id="myImg<?php print $i;?>" class="img-responsive smallthumbnail myImg "  src="<?php print base_url();?>property_upload/<?php print $imgItems[$i];?>" alt="<?php print $singlePostInfo['property_title'];?>" onClick="zom('<?php print $i;?>')" />
								
							<?php }?>
                            </div>
                    
                        
                          
                      <div style="margin-top: 10px;" class="row">
                        <?php $imgItems = explode(",", $singlePostInfo['property_images']);
							for($i=0; $i<count($imgItems)-1; $i++){?>
								<div style="margin-bottom: 10px;" class="col-3 col-xs-3 dr">
									<img id="myImg<?php print $i;?>" class="img-responsive smallthumbnail myImg"  src="<?php print base_url();?>property_upload/<?php print $imgItems[$i];?>" alt="<?php print $singlePostInfo['property_title'];?>" onClick="zom('<?php print $i;?>')" />
								</div>
							<?php }?>
                        </div> 
                      </div>        
                         
                   
                   
                  
                    <div style="margin-top: 3px;" class="listings-content">
                        <!-- Price -->
                        <div class="list-price">
                           <p><?php print $singlePostInfo['property_purpose'];?>
							<?php print $singlePostInfo['property_type'];?>
							<?php print $singlePostInfo['property_category'];?></p>
                            <p><?php  if($singlePostInfo['currency']=='NG'){print '₦';}else{print '$';} print number_format($singlePostInfo['property_price']);?></p>
                        </div>
                        <p class="location"><img src="<?php print base_url();?>img/icons/location.png" alt=""><?php print $singlePostInfo['property_location'].','.$singlePostInfo['property_city'];?></p>
                        
                        <div class="col-lg-12 alert alert-info">
							<h4>Property Description</h4>
							<p><?php print $singlePostInfo['property_description'];?></p>
							
							<div style="background:#F8F5F5; padding: 5px;" class="property-meta-data d-flex align-items-end">
                          <?php if($singlePostInfo['property_type']!='Land'){?>
                           <div class="garage boda-rit ">
                           	<i class="fa fa-bed"></i>  
                           	<span class="font-set"><?php print $singlePostInfo['no_of_rooms'];?> Rooms</span>                           </div>
                            <div class="garage boda-rit ">
                                <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $singlePostInfo['no_of_toilets'];?> Toilets</span>
                            </div>
                            <div class="bathroom boda-rit">
                               <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $singlePostInfo['no_of_bathrooms'];?> Bathrooms</span>
                            </div>
                             <?php }else{?>
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/space.png" alt="">
                                    <span><?php print $singlePostInfo['total_land_area'];?> sqm Total Area</span>
                                </div>
                                <?php }?>
                     </div>
						</div>
						
                        <!-- Core Features -->
                        <h2 style="margin-bottom: -40px; padding-top: 40px;">Property Features</h2>
                        <ul class="listings-core-features d-flex align-items-center">
                            <?php $proItems = explode(",", $singlePostInfo['property_features']);
							for($i=0; $i<count($proItems)-1; $i++){
                           if($proItems[$i]=='Eg: constant water supply'){}else{?>
                            <li>
                            	<i class="fa fa-check" aria-hidden="true"></i> 
                            	<?php print $proItems[$i];?>
                            </li>
                            <?php }}?>
                        </ul>
                        <!-- Listings Btn Groups -->
                        <div class="listings-btn-groups">
                            <a href="#" class="btn south-btn">See Related Uploads by Agent</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-12 alert alert-success">
                    	<h4>Disclaimer</h4>

The information displayed about this property comprises a property advertisement. <?php print $siteInfo['siteName'];?> makes no warranty as to the accuracy or completeness of the advertisement or any linked or associated information, and <?php print $siteInfo['siteName'];?> has no control over the content. This property listing does not constitute property particulars.The information is provided and maintained by <?php print $agentsInfo['company_name'];?>.
                    </div>
                    
                    <div class="col-lg-12 alert alert-default" style="overflow-x: scroll">
						<?php print $agentsInfo['map'];?>
                    </div>
                    
                   <div class="row">
                   
                    <div class="col-lg-5"><img src="<?php print base_url();?>img/new/advert.jpg" alt="advert"></div>
                     <div class="col-lg-12"><br /></div>
                </div>
             </div>
                <div class="col-12 col-md-6 col-lg-4">
                  
                  <div class="col-12 boder_padd ">
					   <span style="font-size: 16px;" class="col-12  text-left"><strong>Call Agent:</strong> <?php print $agentsInfo['office_numbers']?></span>
					</div>
                  
                   <div class="col-12 boder_padd text-left">
					   <button class="btn btn-primary col-12  text-left">Listed/Marketed By:</button>
					<h5><i class="fa fa-label"></i> <?php print $agentsInfo['company_name']?></h5>
					<img id="pp" width="50" height="50" class="img-responsive" src="<?php print base_url();?>company_logo/<?php print $agentsInfo['company_logo']?>" alt="<?php print $agentsInfo['company_name'];?>">
					<br />
					<p><i class="fa fa fa-map-marker"></i> &nbsp;&nbsp;&nbsp;&nbsp; <?php print $agentsInfo['address']?></p>
					<p><i class="fa fa-phone"></i> &nbsp;&nbsp;&nbsp; <?php print $agentsInfo['office_numbers']?></p>
					<p><i class="fa fa-whatsapp "></i> &nbsp;&nbsp;&nbsp; <?php print $agentsInfo['whatsapp_number']?></p>
					<p><i class="fa fa-envelope"></i> &nbsp;&nbsp;&nbsp; <?php print $agentsInfo['email']?></p>
					<p><i class="fa fa-globe fa-fw"></i> &nbsp;&nbsp;&nbsp; <a href="<?php print $agentsInfo['website']?>">Visit website</a></p>
					<p>
						<a href="<?php print $agentsInfo['facebook_link']?>"><i class="text-white fa fa-facebook btn btn-primary"></i></a>
						<a href="<?php print $agentsInfo['twiter_link']?>"><i class="text-white fa fa-twitter btn btn-primary"></i></a>
					</p>
				  </div>
                  
                   <div class="">
                     <div class="col-12 boder_padd ">
					   <button class="btn btn-primary col-12  text-left">Share Link</button>
					   <p><br />
						   <a target="_blank" href="http://facebook.com/share.php?u=<?php print base_url();?>pages/view/detailed/<?php print $singlePostInfo['id'];?>/<?php print preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ","-",$singlePostInfo['property_title']));?>?utm_source=facebook&utm_medium=sharing&utm_campaign=Social+Buttons">
						   <i class="text-white fa fa-facebook btn btn-primary"></i></a>

						   <a href="">
						   <i class="text-white fa fa-twitter btn btn-primary"></i></a>
						</p>
					</div>
                   
                    <div class="contact-realtor-wrapper">
                       <div class="col-12 boder_padd text-left">
					   <button class="btn btn-primary col-12  text-left">Agent Representing:</button>
                        <div class="realtor-info">
                            <div class="realtor---info">
                                <h3 style="font-size: 16px;"><!--Agent:<br />-->
                                <img id="pp" class="img-responsive" width="150" height="150" src="<?php print base_url();?>upload/<?php print $agentsInfo['passport']?>" alt="<?php print $agentsInfo['first_name'];?>"><br /> 
                                 Name: <?php print $agentsInfo['first_name'].' '.$agentsInfo['last_name']?></h3>
                                
                                
                                
                            </div>
                            <div class="realtor--contact-form">
                               <p>Contact Agent Representing</p>
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="realtor-name" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="realtor-number" placeholder="Your Number">
                                    </div>
                                    <div class="form-group">
                                        <input type="enumber" class="form-control" id="realtor-email" placeholder="Your Mail">
                                    </div>
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="realtor-message" cols="30" rows="10" placeholder="Your Message"></textarea>
                                    </div>
                                    <p>I would like to inquire about your property listed. Please contact me at your earliest convenience.</p>
                                    <button type="submit" class="btn south-btn">Send Message</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <!-- Listing Maps -->
        </div>
    </section>
   <!-- The Modal -->
<div id="myModal" class="modalw">
  <span class="close">&times;</span>
  <img class="modal-contentw" id="img01">
  <div id="captionw"></div>
</div>