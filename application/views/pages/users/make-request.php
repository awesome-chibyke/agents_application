<?php $checkLogin();?>
     <?php $authenticate_user();?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 100px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                </div>
                
                <div class="hidden-lg contact-heading" style="margin: 0px; padding-left: 30px;">
                        <h6> Make Request</h6>
                    </div>

                <!-- Contact Form Area -->
                <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
                   
                    <div class="row">
                      <div  class="col-lg-8">
                      <div class="row"><div id="is" class="alert alert-success"></div></div>
                     	<form id="isme" action="" enctype="multipart/form-data"  method="post">
                           
                           <div class="row">
                           <div class="col-lg-6">
                            <div  class="form-group">
                            <label>Category* </label>
						   <select class="form-control" name="category" id="category">
								<option value="" selected="selected">--Select Category--</option>
								<?php for($i=0;$i<count($category);$i++){?>
								<option value="<?php echo $category[$i]['property_category'];?>"><?php echo $category[$i]['property_category'];?></option>
								<?php }?>
						   </select>
							</div></div>
                            <div class="col-lg-6">
                           <div class="form-group">
                               <label>Type* </label>
                           <select class="form-control" name="type" id="type">
								<option value="" selected="selected">--Select Type--</option>
								<?php for($i=0;$i<count($type);$i++){?>
								<option value="<?php echo $type[$i]['property_type'];?>"><?php echo $type[$i]['property_type'];?></option>
								<?php }?>
						   </select>
                            </div></div>
                          </div>
                        
                        <div class="row">
                           <div class="col-lg-6">
                            <div  class="form-group">
                            <label>No. of Bedrooms </label>
						   <select class="form-control" name="rom_num" id="rom_num">
								<?php for($i=0;$i<8;$i++){?>
								<option value="<?php echo $i;?>"><?php echo $i;?></option>
								<?php }?>
								<option value="7+">7+</option>
						   </select>
							</div></div>
                           <div class="col-lg-2">
                             <div class="form-group">
                               <label>Currency* </label>
                              <select class="form-control"  name="currency" id="currency">
								   <option <?php if($property_currency=='NG') echo 'selected="selected"';?> value="NG">₦</option>
								   <option <?php if($property_currency=='US') echo 'selected="selected"';?> value="US">$</option>
								</select>
                              </div>
                           </div>
                            <div class="col-lg-4">
                           <div class="form-group">
                               <label>Budget* </label>
                              <input type="number" class="form-control" name="budget" id="budget" placeholder="Your Budget">
                            </div></div>
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-12">
                           <div class="form-group">
                               <label>Preferred Town/Locality* (eg.Trans-Ekulu) </label>
                              <input type="town" class="form-control" name="town" id="town" placeholder="Preferred Town">
                            </div></div>
                          </div>
                          <div class="row">
                          	<div class="col-lg-6">
                            <div  class="form-group">
                            <label>Preferred State*</label>
						   <select class="form-control" name="state" id="state">
						     <option value="" selected="selected">--Select State--</option>
								<?php for($i=0;$i<count($states);$i++){?>
								<option value="<?php echo $states[$i];?>"><?php echo $states[$i];?></option>
								<?php }?>
						   </select>
							</div></div>
                         
                         <div class="col-lg-3">
                            <div  class="form-group">
                            <label>How Urgent</label>
                            <select class="form-control" name="num" id="num">
						     <option value="Any Time">Any Time</option>
						     <?php for($i=0;$i<=31;$i++){?>
								<option value="<?php print $i;?>"><?php print $i;?></option>
								<?php }?>
								</select>
							 </div></div>
							 <div class="col-lg-3">
                            <div  class="form-group">
                            <label>&nbsp;</label>
						   <select class="form-control" name="season" id="season">
						     <option value="Any Time">Any Time</option>
								<option value="Day">Day</option>
								<option value="Week">Week</option>
								<option value="Month">Month</option>
								<option value="Year">Year</option>
						   </select>
							</div></div>
                         <div class="col-lg-12">
                         <div class="contact-form">
                         <div class="form-group">
                               <label>Request Comment* <span id="sample"><u>(see sample comment)</u></span></label>
                               <p id="see" class="text-success">"Hi, my name is helen i want you to help me find an accommodation at Trans-Ekulu Enugu. I will prefer a 2 Bed Room Flat of rent between N250,000 - N300,000. Please i will be needing it as soon as possible as my rent in my current accomodation is expiring soon and i don't intend renewing the rent fee. Thanks as i anticipate your quick response to this request."</p>
                                <textarea class="form-control" name="request" id="request"  placeholder="Your Request Message"></textarea>
                            </div></div>
                          </div></div>
                            <span onClick="makeRequest('<?php print base_url();?>','<?php print $user_data['unique_id'];?>','<?php print $user_data['role'];?>')" name="make-request" type="submit" class="btn south-btn">Send Request </span>
                            
                        </form>
                     </div>
                     <div class="col-lg-4 hidden-xs"><img src="<?php print base_url();?>img/new/request.jpg" /></div>
                  </div> 
                    
                </div>
            </div>
        </div>
    </section>