<?php //$checkLogin();?>
     <?php //$authenticate_user(); ?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 50px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
                <!-- Contact Form Area -->
               <div style="margin-top: ;" class="col-12 col-lg-8 wow fadeInUp" data-wow-delay="750ms">
                 <div class="row">
                  <div class="contact-heading" style="margin: 0px; padding-left: 30px;">
				   <!--<h6>Add New Property (<a href="#"><i class="fa fa-plus-circle text-success"></i> 20</a>)</h6>-->
                    </div>
 <div  class="col-lg-12">
  <div class="row"><div id="is" class="alert alert-success"> </div></div>
   <section class="featured-properties-area">
	<div class="container">
	 <div class="row">
			
			<div class="col-12">
                    <div style="width: 100%; text-align: left;" class="pull-left  wow fadeInUp">
                        <span class="pull-left"><h5>Properties In <?php print $cat;?></h5></span>
                         <span class="pull-right"> 
                         <span class="pull-right">
                         <?php  $cat_set = $cat_set;?>
                        	<select style="margin-bottom:5px !important;" class="form-control" name="goToState" id="goToState">
								<?php for($i=0;$i<count($states);$i++){?>
								<option <?php if($states[$i]==$cat_set) print 'selected="selected"';?> value="<?php echo $states[$i];?>"><?php echo $states[$i];?></option>
								<?php }?>
						   </select>
                      
                   <input id="baseurl" value="<?php print base_url();?>" type="hidden" name="baseurl" />
                        </span>
						<span style="padding-top: 10px; padding-right: 10px;"class="pull-right">FIlter By:</span>
                   </span>
                    </div> 
                </div>	
                
            <div class="is_card">A total of <?php print number_format($total_row);?> Properties in <?php print $cat;?> in <?php print $siteInfo['siteName'];?>. Among these properties are houses, office, lands, shops, flats etc.We verify every property posted here you have nothing to be afraid of.</div>    						
															
			<div style="background: #1688ae; color: #fff;" class="alert shadow col-12 hidden-xs">
                    <div style="width: 100%; text-align: left;" class="pull-left  wow fadeInUp">
                        <span class="pull-left">MY PROPERTIES LISTING</span>
                        <!--<span class="pull-right">Properties Added(<?php print $count_post_properties;?>) | Land Added(<?php print $count_post_land;?>)</span>-->
                    </div> 
             </div>
             
             <div class="alert alert-info shadow col-12 hidden-lg">
                    <div style="width: 100%; text-align: left;" class="pull-left  wow fadeInUp">
                        <span class="pull-left">MY PROPERTIES LISTING</span>
                        <span class="pull-right">Properties Added(<?php print $count_post_properties;?>) | Land Added(<?php print $count_post_land;?>)</span> 
                    </div> 
                </div>	
                
  								
							
			<?php if($property_data==0){ ?>
		<div class="col-12"><h6 align="center"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6></div>
	<?php				
		print '<h1>No property listing for your search category was found.</h1>';
	}else{
				for($i=0;$i<count($property_data);$i++){?>
				<?php if($i==1){?>
				  <div class="col-12"><h6 align="center"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6></div>
				<?php }?>
				
				<div id="item26" class="listings-content set-listing shadow add-top-design">
                   <?php if($property_data[$i]['subscription']==1){?>
                        <div class="tag-item">
                                <span> Basic</span>
                            </div>

                         <?php }else if($property_data[$i]['subscription']==2){?>
                          <div class="tag-item2">
                                <span> Featured </span>
                            </div>
                            <?php }else if($property_data[$i]['subscription']==3){?>
                            <div class="tag-item3">
                                <span> Featured Plus </span>
                            </div>
                            <?php }?>
                            
                        <div style="padding-top: 30px;" class="list-p">
                            <br />
                        </div>
                        
                     <span class="location">
                        <h6> <i class="fa fa-star fa-spin text-success"></i>
                         <?php print $property_data[$i]['property_purpose'];?>
                         <?php print $property_data[$i]['property_type'];?> 
                         <?php print $property_data[$i]['property_category'];?>: <?php print $property_data[$i]['property_title'];?></h6>
                         <hr>
                     </span>
                 
                  <div class="row">
                        <div  class="col-lg-3">
                        
                        	<img id="myImg<?php print $property_data[$i]['id'];?>" class="myImg" onClick="zom('<?php print $property_data[$i]['id'];?>')" src="<?php print base_url();?>property_upload/<?php print $property_data[$i]['property_thumbnail'];?>" alt="<?php print $property_data[$i]['property_title'];?>">
                        	
                        	<span style="width: 100%; float: left; padding: 10px; align-text: center;"><i class="fa fa-camera"></i> 
                        	<?php print count(explode(",",$property_data[$i]['property_images']))-1;?> photos
							
							</span>
							
                        </div>
                       <div class="col-lg-9">
						   <span>PID: <?php print $property_data[$i]['unique_id'];?></span>
                        <span style="width: 100%; text-align: justify">
                        <span class="set-so">
                        <h5 style="font-size: 16px;">
                        <img src="<?php print base_url();?>img/icons/location.png" alt="">
                        <?php print $property_data[$i]['property_city'];?>: <?php print $property_data[$i]['property_location'];?></h5>
                        <?php if($property_data[$i]['last_update']==""){?>
                        <strong>Added Date:</strong> <?php print $property_data[$i]['post_date'];?>
                        <?php }else{?>
                        <strong>Last Update:</strong> <?php print $property_data[$i]['last_update'];?>
                        <?php }?>
                         </span>
                        <br />
                        <span style="font-size: 12px;">
                        <?php print $reduce_text_lent($property_data[$i]['property_description'], 400);?>
                        </span> <br />
                        
                        </span>
                        <div style="font-size: 20px;" class="list-price text-primary"><p><hr><?php if($property_data[$i]['currency']=='NG'){print '₦';}else{print '$';};?>
                                <?php print number_format($property_data[$i]['property_price']);?> (<?php print $property_data[$i]['payment_type'];?>)</p></div>
                       </div>
                     </div>
                        <!-- Meta -->
                     <div style="background:#F8F5F5; padding: 5px;" class="property-meta-data d-flex align-items-end">
                          <?php if($property_data[$i]['property_type']!='Land'){?>
                           <div class="garage boda-rit ">
                           	<i class="fa fa-bed"></i>  
                           	<span class="font-set"><?php print $property_data[$i]['no_of_rooms'];?> Rooms</span>                           </div>
                            <div class="garage boda-rit ">
                                <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $property_data[$i]['no_of_toilets'];?> Toilets</span>
                            </div>
                            <div class="bathroom boda-rit">
                               <i class="fa fa-bath"></i>
                                <span class="font-set"> <?php print $property_data[$i]['no_of_bathrooms'];?> Bathrooms</span>
                            </div>
                             <?php }else{?>
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/space.png" alt="">
                                    <span><?php print $property_data[$i]['total_land_area'];?> sqm Total Area</span>
                                </div>
                                <?php }?>
                     </div>
				    <div style="width: 100%; padding-top: 10px;">
				    	<spanpull-left>Published By: <?php print $user_data['company_name'];?> <img src="<?php print base_url();?>company_logo/<?php print $user_data['company_logo'];?>" width="40" height="30" alt=""> </span>
						<span  class="pull-right">
							<a style="color: #E37F1C;" href="<?php print base_url();?>pages/view/detailed/<?php print $property_data[$i]['id'];?>/<?php print preg_replace('/[^A-Za-z0-9\-]/', '', str_replace(" ","-",$property_data[$i]['property_title']));?>">+Details</a>
							
							<?php if($property_data[$i]['whois_unique_id']==$user_data['unique_id']){}else{?>
							 | <span id="saver" onClick="saveProperty('<?php print base_url();?>','<?php print $property_data[$i]['unique_id'];?>','<?php print $property_data[$i]['whois_unique_id'];?>','<?php print $user_data['unique_id'];?>');" class="saver fa fa-heart" title="Save Property"> Save</span>
							<?php }?>
							
						</span>
				    </div>
               	<hr>
          <!--<?php if($property_data[$i]['subscription']==1){
		   if($user_data['role']=="user" || !isset($user_data['role'])){}else{ ?>
               <a href="<?php print base_url();?>pages/subscription/<?php print $property_data[$i]['unique_id'];?>"><button class="btn btn-primary pull-right">Boost Now!</button></a>
                <?php } }?>  --> 
                      
                 </div> 
          <?php }?>    
         <?php } ?>


                   <div class="main">
					  <div id="content">
                       <div id="pagination">
						<ul class="tsc_pagination">
                        <?php foreach ($links as $link) {
						   	echo "<li>". $link."</li>";
						 } ?>
						</ul>
					  </div>
                    </div>
                  </div>
							
							</div>
						</div> 
					  </section>
                     </div>
                  </div> 
                </div>
                
      <div style="margin-top: ;" class="col-12 col-lg-4 wow fadeInUp" data-wow-delay="750ms">
      
       <div class="col-12 boder_padd shadow">
          Can't find what you're looking for?
         	 <a href="<?php print base_url();?>users/make-request">
				<button class="btn btn-primary col-12"> Make a Request</button>
          	</a>
          </div>
          
          <div class="col-12 boder_padd">
          	<img class="img-responsive" src="<?php print base_url();?>/advert_banner/anigif3.gif">
		  </div>
          
		  <div class="col-12 boder_padd_col4 ">
			<button class="btn btn-primary col-12 text-left fa fa-search"> Advanced Filter Options</button>
          	
          	<div class="form-group"><br />
			   <label>Street/Town/Locality* </label>
			  <input type="text" class="form-control" name="town" id="town" placeholder="eg. No 3 Ogbonnayaka Street Trans-Ekulu">
			</div>
          	
          	<div  class="form-group">
			   <label>Category* </label>
				<select class="form-control" name="category" id="category">
					<option value="" selected="selected">--Select Category--</option>
					<?php for($i=0;$i<count($category);$i++){?>
					<option value="<?php echo $category[$i]['property_category'];?>"><?php echo $category[$i]['property_category'];?></option>
					<?php }?>
			   </select>
		   </div>
        
         <div class="form-group">
			<label>Property Type* </label>
			 <select class="form-control" name="type" id="type">
				<option value="" selected="selected">--Select Type--</option>
				<?php for($i=0;$i<count($type);$i++){?>
				<option value="<?php echo $type[$i]['property_type'];?>"><?php echo $type[$i]['property_type'];?></option>
				<?php }?>
			</select>
        </div>
      
      <div class="row">
        <div class="col-lg-6">
		  <div  class="form-group">
			<label>State*</label>
		   <select class="form-control" name="state" id="state">
			 <option value="" selected="selected">--Select State--</option>
				<?php for($i=0;$i<count($states);$i++){?>
				<option value="<?php echo $states[$i];?>"><?php echo $states[$i];?></option>
				<?php }?>
		   </select>
		</div>
	   </div>
        
         <div class="col-lg-4">
			<div  class="form-group">
			 <label>Bedrooms </label>
			  <input type="number" class="form-control" name="num_rom" id="num_rom" placeholder="">
			 </div>
		</div>
      </div>
      
      <button class="btn btn-primary col-12"> Search</button>
   </div>
          
    <div class="col-12 boder_padd_col4 ">
			<h5 align="center">Notify me when there is a new property listing</h5>
          	<div class="form-group"><br />
			   <label>Name* </label>
			  <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" value="<?php print @$user_data['first_name'].' '.@$user_data['last_name'];?>">
			</div>
          	<div class="form-group"><br />
			   <label>Email* </label>
			  <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value="<?php print @$user_data['email'];?>">
			</div>
			<button class="btn btn-primary col-12"> Subscribe</button>
    </div>
  
     <!-- <div class="col-12 boder_padd_col4 ">
			<button class="btn btn-primary col-12 text-left fa fa-search"> Available Property <?php print $cat;?></button>
          	<br />
          <table style="width: 100%;" class="table table-strip">
          <?php for($i=0;$i<count($type);$i++){?>
          	<tr>
          		<th>
          			<a href="<?php print base_url();?>pages/properties/type/<?php print str_replace(" ","-",$cat);?>/<?php print str_replace(" ","-",$type[$i]['property_type']);?>">
          				<?php print $type[$i]['property_type'].' '.$cat;?>
          			</a>
          		</th>
          		<td>
					<a href="<?php print base_url();?>pages/properties/type/<?php print str_replace(" ","-",$cat);?>/<?php print str_replace(" ","-",$type[$i]['property_type']);?>">
						<u>
							<?php print $get_type_by_cat($cat,$type[$i]['property_type']);?>
						</u>
					</a>
          		</td>
          	</tr>
          <?php }?>
          </table>
    </div>-->
                  

          <div class="col-12 boder_padd2 item_cards">
          	<h4 class="text-white">Subscription Payment<hr></h4>
			<li class="set_list">All bank transfers, cheque and cash payments should be made to:</li>
			<li class="set_list">Account Name: <?php print $siteInfo['siteName'];?> Limited</li>
			<li class="set_list">Account Number: 1013412370</li>
			<li class="set_list">Bank: Zenith Bank</li>
			<li class="set_list">Alternatively, you can pay online using the button below.</li>
			<span style="color: #D8F40C;">Pay Online<br/></span><br />
			<a href="#"><span class=" pay_set">
			<img src="<?php print base_url();?>img/new/paystack.png" alt="paystack-<?php print $siteInfo['siteName'];?>">
			</span></a>
		  </div> 
          <div class="col-12 boder_padd2">
			  <h4>Contact <?php print $siteInfo['siteName'];?><hr></h4>
			  <h6>Contact us using the details below.</h6>
			  <li class="set_list"><i class="fa fa-envelope"></i> Email: <?php print $siteInfo['siteEmail1'];?></li>
			  <li class="set_list"><i class="fa fa-phone"></i> Phone: <?php print $siteInfo['sitePhone1'];?></li>
			  <li class="set_list"><i class="fa fa-whatsapp"></i> WhatsApp Number: <?php print $siteInfo['whatsappNum'];?></li>
		  </div>
         
          <div class="col-12 boder_padd2 item_cards2 text-center">
          	<h4 class="text-white">Get Verified Now!<hr></h4>
			<h6 class="text-white">Gain trust from user. Simply verify your account and stay on top of the day to day activities on this platform.</h6>
			<button class="btn btn-primary">Verify Now!</button><br />
		  </div>
         
          <div class="col-12 boder_padd2 item_cards text-center">
          	<h4 class="text-white">Feature your company<hr></h4>
			<h6 class="text-white">Get more recognition. Let people see your company Name/Logo on the front page of <?php print $siteInfo['siteName'];?></h6>
			<button class="btn btn-primary">Get Started!</button><br />
		  </div>  
     
       	  <div class="col-12 boder_padd">
          	<img class="img-responsive" src="<?php print base_url();?>/advert_banner/advert.JPG">
		  </div>   	   	
      
     </div> 
               
  </div>
 </div>
</section>

<!-- The Modal -->
<div id="myModal" class="modalw">
  <span class="close">&times;</span>
  <img class="modal-contentw" id="img01">
  <div id="captionw"></div>
</div>