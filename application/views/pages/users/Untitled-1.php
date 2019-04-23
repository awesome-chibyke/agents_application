<?php $checkLogin();?>
     <?php $authenticate_user();

function anytimeNum(){
	print '<select class="form-control" name="num" id="num">
						     <option value="Any Time">Any Time</option>';
						      for($i=0;$i<=31;$i++){
								print '<option value="'.$i.'">'.$i.'</option>';
								 }
								print '</select>';
}

function category($category){
	 print '<select class="form-control" name="category" id="category">
								<option value="" selected="selected">--Select Category--</option>';
							for($i=0;$i<count($category);$i++){
								print '<option value="'.$category[$i]['property_category'].'">'.$category[$i]['property_category'].'</option>';
							}
						 print  '</select>';
}

function type($type){
	print  '<select class="form-control" name="type" id="type">
								<option value="" selected="selected">--Select Type--</option>';
						 for($i=0;$i<count($type);$i++){
							print '<option value="'.$type[$i]['property_type'].'">'.$type[$i]['property_type'].'</option>';
						 }
						  print '</select>';
}

function roomNum(){
	print '<select class="form-control" name="rom_num" id="rom_num">';
						for($i=0;$i<8;$i++){
							print '<option value="'.$i.'">'.$i.'</option>';
						}
							print '<option value="7+">7+</option>
						   </select>';
}

function state($states){
	print '<select class="form-control" name="state" id="state">
						     <option value="" selected="selected">--Select State--</option>';
						 for($i=0;$i<count($states);$i++){
							print '<option value="'.$states[$i].'">'.$states[$i].'</option>';
								 }
						 print  '</select>';
}

function urgent(){
	print '<select class="form-control" name="num" id="num">
						     <option value="Any Time">Any Time</option>';
						     for($i=0;$i<=31;$i++){
								print '<option value="'.$i.'">'.$i.'</option>';
								}
						print '</select>';
}
?>
      <section class="south-contact-area section-padding-100">
       <div style="padding-top: 100px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row">
               <div class="hidden-xs col-12 col-lg-2 wow fadeInUp" data-wow-delay="1000ms">
                <?php $this->load->view('pages/users/sidebar'); ?> 
                </div>
             
                <!-- Contact Form Area -->
                <div style="margin-top: ;" class="col-12 col-lg-10 wow fadeInUp" data-wow-delay="750ms">
                   
                    <div class="row">
                     <div class="contact-heading" style="margin: 0px; padding-left: 30px;">
                        <h6> My Request Listing</h6>
                    </div>
                      <div class="col-lg-12">
                 <?php for($i=0;$i<count($request_data);$i++){?>
			     	<div id="item<?php print $request_data[$i]['id'];?>" class="listings-content set-listing shadow">
                       <div class="tag-item">
                                <span><?php print $request_data[$i]['request_category'];?></span>
                            </div>
                            
                        <div style="padding-bottom: 20px;" class="list-p">
                            <p style="font-size: 12px;">
                            
                            <strong>REF:</strong> <span style="font-size: 12px;"><?php print $request_data[$i]['unique_id']?></span></p>
                        </div>
                        <span class="location"><img src="<?php print base_url();?>img/icons/location.png" alt=""><?php print $request_data[$i]['preferred_state']?>: <?php print $request_data[$i]['preferred_town']?></span>
                        <span style="width: 90%; text-align: justify">
                        <span class="set-so"><br /><strong>Request Date:</strong> <?php print $request_data[$i]['request_date']?> | <strong>Status:</strong> <?php print $request_data[$i]['status']?> | <strong>How Urgent:</strong> <?php print $request_data[$i]['how_urgent']?></span>
                        <br /><?php print $request_data[$i]['request_comment']?></span>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                           <div class="new-tag boda-rit font-set">
                           	<strong>Budget: </strong>₦<?php print number_format($request_data[$i]['budget'])?>
                            </div>
                            <div class="garage boda-rit ">
                                <img style="width: 15px !important;" src="<?php print base_url();?>img/icons/garage.png" alt="">
                                <span class="font-set"><?php print $request_data[$i]['no_of_bedroom']?> Bedroom <?php print $request_data[$i]['request_type']?></span>
                            </div>
                            <div class="bathroom ">
                                <span class="font-set"><strong>Request Type:</strong> <?php print $request_data[$i]['requst_from']?></span>
                            </div>
                            <a title="Remove" href="#" onClick="deleteRequest('<?php print base_url();?>','<?php print $request_data[$i]['id'];?>')"><i class="fa fa-trash-o enlg"></i></a> | 
                            <a title="Edit" data-toggle="modal" data-target="#modal-large"><i class="fa fa-edit enlg"></i></a>
                        </div>
                    </div>
                        
                        
                      <!-- Modal Large -->
              <div style="z-index: 10000000;" class="modal fade" id="modal-large" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                              <h4 class="modal-title pull-left">Modal title</h4>
                          </div>
                          <div class="modal-body">
                              <p><form id="isme" action="" enctype="multipart/form-data"  method="post">
                           
                           <div class="row">
                           <div class="col-lg-4">
                            <div  class="form-group">
                            <label>Category* </label>
						     <?php category($category);?>
							</div></div>
                            <div class="col-lg-4">
                           <div class="form-group">
                               <label>Type* </label>
                            <?php type($type);?>
                            </div></div>
                            <div class="col-lg-4">
                            <div  class="form-group">
                            <label>No. of Bedrooms </label>
						   <?php roomNum();?>
							</div></div>
                          </div>
                        
                        <div class="row">
                          
                           
                            <div class="col-lg-3">
                           <div class="form-group">
                               <label>Budget (₦)* </label>
                              <input type="number" class="form-control" name="budget" id="budget" placeholder="Your Budget (₦)">
                            </div></div>
                            	<div class="col-lg-3">
                            <div  class="form-group">
                            <label>Preferred State*</label>
						   <?php state($states);?>
							</div></div>
                         
                         <div class="col-lg-3">
                            <div  class="form-group">
                            <label>How Urgent</label>
                            <?php urgent();?>
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
                          </div>
                          
                          <div class="row">
                            <div class="col-lg-12">
                           <div class="form-group">
                               <label>Preferred Town/Locality* (eg.Trans-Ekulu) </label>
                              <input type="town" class="form-control" name="town" id="town" placeholder="Preferred Town">
                            </div></div>
                          </div>
                          <div class="row">
                          
                         
                         
                         <div class="col-lg-12">
                         <div class="contact-form">
                         <div class="form-group">
                               <label>Request Comment* <span id="sample"><u>(see sample comment)</u></span></label>
                               <p id="see" class="text-success">"Hi, my name is helen i want you to help me find an accommodation at Trans-Ekulu Enugu. I will prefer a 2 Bed Room Flat of rent between N250,000 - N300,000. Please i will be needing it as soon as possible as my rent in my current accomodation is expiring soon and i don't intend renewing the rent fee. Thanks as i anticipate your quick response to this request."</p>
                                <textarea class="form-control" name="request" id="request"  placeholder="Your Request Message"></textarea>
                            </div></div>
                          </div></div>
                            <span onClick="makeRequest('<?php print base_url();?>','<?php print $user_data['unique_id'];?>','<?php print $user_data['role'];?>')" name="make-request" type="submit" class="btn south-btn">Send Request </span>
                            
                        </form></p>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-lg btn-info m-b-5">Save changes</button>
                              <button type="button" class="btn btn-lg btn-default m-b-5" data-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </div>
              </div>   
                        
                        
                        <?php }?>
                        
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
                </div>
            </div>
        </div>
    </section>