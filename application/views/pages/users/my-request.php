<?php $checkLogin();?>
     <?php $authenticate_user();?>
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
                 <?php
						  if($request_data>0){
							  for($i=0;$i<count($request_data);$i++){?>
			     	<div id="item<?php print $request_data[$i]['id'];?>" class="listings-content set-listing shadow">
                       <div class="tag-item">
                                <span><?php print $request_data[$i]['request_category'];?></span>
                            </div>
                            
                        <div style="padding-bottom: 20px;" class="list-p">
                            <p style="font-size: 12px;">
                            <strong>REF:</strong> <span style="font-size: 12px;"><?php print $request_data[$i]['unique_id']?></span></p>
                        </div>
                        <span class="location"><img src="<?php print base_url();?>img/icons/location.png" alt=""><?php print $request_data[$i]['preferred_state'];?>: <?php print $request_data[$i]['preferred_town'];?></span>
                        <span style="width: 90%; text-align: justify">
                        <span class="set-so"><br /><strong>Request Date:</strong> <?php print $request_data[$i]['request_date']?> | <strong>Status:</strong> <?php print $request_data[$i]['status']?> | <strong>How Urgent:</strong> <?php print $request_data[$i]['how_urgent']?></span>
                        <br /><?php print $request_data[$i]['request_comment']?></span>
                        <!-- Meta -->
                        <div class="property-meta-data d-flex align-items-end">
                           <div class="new-tag boda-rit font-set">
                           	<strong>Budget: </strong><?php if($request_data[$i]['currency']=='NG'){print '₦';}else{print '$';};?><?php print number_format($request_data[$i]['budget'])?>
                            </div>
                            <div class="garage boda-rit ">
                                <img style="width: 15px !important;" src="<?php print base_url();?>img/icons/garage.png" alt="">
                                <span class="font-set"><?php print $request_data[$i]['no_of_bedroom'];?> Bedroom <?php print $request_data[$i]['request_type']?></span>
                            </div>
                            <div class="bathroom ">
                                <span class="font-set"><strong>Request Type:</strong> <?php print $request_data[$i]['requst_from'];?></span>
                            </div>
                            <?php if($edit_request_status['status']=='1'){?>
                            <a title="Remove" href="#" onClick="deleteRequest('<?php print base_url();?>','<?php print $request_data[$i]['id'];?>')"><i class="fa fa-trash-o enlg"></i></a> | 
                            <a title="Edit" href="<?php print base_url();?>pages/request/edit-request/<?php print $request_data[$i]['id'];?>"><i class="fa fa-edit enlg"></i></a>
                            <?php }?>
                        </div>
                    </div>   
                  <?php }?>
                <?php }else{ ?>
		<div class="col-12"><h6 align="center"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6></div>
	<?php				
		print '<h1>No property listing for your search category was found.</h1>';
	}?>
                        
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