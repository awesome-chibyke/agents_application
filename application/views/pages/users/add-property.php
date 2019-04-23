<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 50px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
              
              <div style="background: #1688ae; color: #fff;" class="alert shadow col-12 ">
                    <div style="width: 100%; text-align: left;" class="pull-left  wow fadeInUp">
                        Add New Property (STEP 1) 
                   		<span class="pull-right">(<a href="#" class="text-white"><i class="fa fa-plus-circle text-white"></i> 20</a>)</span>
                    </div> 
             </div>
              
              
               <div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                </div>
                
            
                
                <!-- Contact Form Area -->
        <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
           <div class="row">
            <div class="inner-shad add-top-design">
             <!--<div class="contact-heading" style="margin: 0px; width: 100%;">
               <div  class="col-lg-12">
                 <div class="alert alert-info">Add New Property (STEP 1) 
                   <span class="pull-right">(<a href="#"><i class="fa fa-plus-circle text-success"></i> 20</a>)</span>
                 </div>
                </div>
               </div>-->
            
               <div  class="col-lg-12">
                 <div class="row"><div id="is" class="alert alert-success"></div></div>
                    <form id="isme" action="" enctype="multipart/form-data"  method="post">
                       <div class="row">
                          <div class="col-lg-12">
                           <div class="form-group">
                               <label>Property Title* </label>
                              <input type="text" class="form-control" name="property_title" id="property_title" placeholder="e.g. 2 Bedroom Flats with Nice Facilities">
                            </div>
                          </div>
                       </div>
                       
                      <div class="row">
                        <div class="col-lg-4">
                         <div  class="form-group">
                           <label>Category* </label>
						    <select class="form-control" name="category" id="category">
								<option value="" selected="selected">--Select Category--</option>
								<?php for($i=0;$i<count($category);$i++){?>
								<option value="<?php echo $category[$i]['property_category'];?>"><?php echo $category[$i]['property_category'];?></option>
								<?php }?>
						   </select>
					      </div>
                        </div>
                     
                           
                      <div class="col-lg-4">
                         <div class="form-group">
                            <label>Property Type* </label>
                              <select class="form-control" name="type" id="type">
									<option value="" selected="selected">--Select Type--</option>
									<?php for($i=0;$i<count($type);$i++){?>
									<option value="<?php echo $type[$i]['property_type'];?>"><?php echo $type[$i]['property_type'];?></option>
									<?php }?>
						        </select>
                            </div>
                         </div>
                          <div class="col-lg-4">
                              <div class="form-group">
                               <label>Property Purpose* </label>
								<select class="form-control"  name="purpose" id="purpose">
									  <option selected="selected" value="">Select Purpose</option>
									  <option <?php if($purpose=='Residential') echo 'selected="selected"';?> value="Residential">Residential</option>
									  <option <?php if($purpose=='Commercial') echo 'selected="selected"';?> value="Commercial">Commercial</option>
									  <option <?php if($purpose=='Industrial') echo 'selected="selected"';?> value="Industrial">Industrial</option>
									  <option <?php if($purpose=='Mixed-use') echo 'selected="selected"';?> value="Mixed-use">Mixed-use</option>
								</select>
                            </div>
                          </div>
                            
                        </div>
                        
                        <div class="row">
                          <div class="col-lg-2">
                             <div class="form-group">
                               <label>Currency* </label>
                              <select class="form-control"  name="currency" id="currency">
								   <option <?php if($property_currency=='NG') echo 'selected="selected"';?> value="NG">₦</option>
								   <option <?php if($property_currency=='US') echo 'selected="selected"';?> value="US">$</option>
								</select>
                              </div>
                           </div>
                          <div class="col-lg-2">
                             <div class="form-group">
                               <label>Price* </label>
                              <input type="number" class="form-control" name="price" id="price" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-4">
                             <div class="form-group">
                               <label>Property Status* </label>
                               <select class="form-control"  name="status" id="status">
								   <option <?php if($property_status=='Available') echo 'selected="selected"';?> value="Available">Available</option>
								   <option <?php if($property_status=='Taken') echo 'selected="selected"';?> value="Taken">Taken</option>
								</select>
                              </div>
                           </div>
                           <div class="col-lg-4">
                            <div  class="form-group">
                             <label>No. of Bedrooms </label>
						      <input type="number" class="form-control" name="num_rom" id="num_rom" placeholder="">
							 </div>
                            </div>
                       </div>
                    
                      <div class="row">
                           <div class="col-lg-4">
                            <div  class="form-group">
                             <label>No. of Toilets</label>
						      <input type="number" class="form-control" name="toilet" id="toilet" placeholder="">
							 </div>
                            </div>
                           <div class="col-lg-4">
                             <div class="form-group">
                               <label>No. of Bathrooms </label>
                              <input type="number" class="form-control" name="bathroom" id="bathroom" placeholder="">
                              </div>
                           </div>
                           <div class="col-lg-4">
                             <div class="form-group">
                               <label>Parking Space </label>
                              <input type="number" class="form-control" name="parking" id="parking" placeholder="">
                              </div>
                           </div>
                            
                          <div class="col-lg-6">
                             <div class="form-group">
                               <label>Total Land Area(sqm) </label>
                              <input type="number" class="form-control" name="land_area" id="land_area" placeholder="">
                              </div>
                           </div>
                           
                           <div class="col-lg-6">
                             <div class="form-group">
                               <label>Area Covered by Property(sqm) </label>
                              <input type="number" class="form-control" name="property_area" id="property_area" placeholder="">
                              </div>
                           </div>
                       </div>   
                        
                       <div class="row">
                          <div class="col-lg-12">
                           <div class="form-group">
                               <label>Other Property Features* </label>
                               <p class="help-block"><em><small>Type a word then hit enter</small></em></p>
                               <input type="text" name="features" id="features" class="form-control" value="Eg: constant water supply, " data-role="tagsinput" placeholder=" " />
                            </div>
                          </div>
                   </div> 
                          
                      <div class="row">
                        <div class="col-lg-4">
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
                            <label>Payment Mood*</label>
                           	 <select class="form-control"  name="paymood" id="paymood">
								 <option <?php if($payment_mood=='Annually') echo 'selected="selected"';?> value="Annually">Annually</option>
								 <option <?php if($payment_mood=='Monthly') echo 'selected="selected"';?> value="Monthly">Monthly</option>
								 <option <?php if($payment_mood=='Land Price') echo 'selected="selected"';?> value="Land Price">Land Price</option>
							 </select>
						   </div>
					    </div>
					    
					   <div class="col-lg-4">
                         <div  class="form-group">
                          <label>Apartment Standard</label>
						   <select class="form-control" name="standard" id="standard">
						     <option <?php if($apartment_stnd=='Furnished') echo 'selected="selected"';?> value="Furnished">Furnished</option>
						     <option <?php if($apartment_stnd=='Semi Furnished') echo 'selected="selected"';?> value="Semi Furnished">Semi Furnished</option>
							 <option <?php if($apartment_stnd=='Not Furnished') echo 'selected="selected"';?> value="Not Furnished">Not Furnished</option>
						   </select>
					    </div>
                      </div>
                   </div>
                   
                   <div class="row">
                          <div class="col-lg-12">
                           <div class="form-group">
                               <label>Street/Town/Locality* </label>
                              <input type="text" class="form-control" name="town" id="town" placeholder="eg. No 3 Ogbonnayaka Street Trans-Ekulu">
                            </div>
                          </div>
                   </div>
                   
                   <div class="row">
                          <div class="col-lg-12">
                           <div class="form-group">
                               <label>YouTube Video Embed Link</label> e.g. <textarea readonly style="border: #FFFFFF solid 0px; font-size: 10px; height: 35px;" class="form-control"><iframe width="100%" height="315" src="https://www.youtube.com/embed/xxxxxxxx" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></textarea>
                              <input type="text" class="form-control" name="youtube" id="youtube" placeholder="">
                            </div>
                          </div>
                   </div>
                   
                   <div class="row">
                      <div class="col-lg-12">
                       <div class="contact-form">
                         <div class="form-group">
                               <label>Property Description* </label>
                                <textarea class="form-control" name="description" id="description"  placeholder=""></textarea>
                            </div>
                         </div>
                      </div>
                   </div>
                            <span onClick="addProperty('<?php print base_url();?>','<?php print $user_data['unique_id'];?>','<?php print $user_data['role'];?>')" name="make-request" type="submit" class="btn south-btn">Send Request </span>
                            
                        </form>
                     </div>
                  </div>
                     
                  </div> 
                    
                </div>
            </div>
        </div>
    </section>