    <section class="hero-area">
        <div class="hero-slides owl-carousel">
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php print base_url();?>img/bg-img/feature8.jpg);">
                <div class="container h-100">
                    <div class="row h-75 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" data-animation="fadeInUp" data-delay="100ms">Let's Find You A property</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php print base_url();?>img/bg-img/Agents.jpg);">
                <div class="container h-100">
                    <div class="row h-75 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" data-animation="fadeInUp" data-delay="100ms">We Are Property Agents</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Hero Slide -->
            <div class="single-hero-slide bg-img" style="background-image: url(<?php print base_url();?>img/bg-img/Real-Estate-Business-in-Nigeria.jpg);">
                <div class="container h-100">
                    <div class="row h-75 align-items-center">
                        <div class="col-12">
                            <div class="hero-slides-content">
                                <h2 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" data-animation="fadeInUp" data-delay="100ms">Find your perfect house</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Advance Search Area Start ##### -->
    <div style="margin-top: -20px !important;" class="south-search-area">
        <div class="container">
            <div class="row">
                <div class="col-12" style="background-color: #FFFFFF;">
                    <div class="advanced-search-form">
                        <!-- Search Title -->
                        <div class="search-title">
                            <p>Search for your home</p>
                        </div>
                        <!-- Search Form -->
                        <form action="#" method="post" id="advanceSearch">
                            <div class="row">


                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="cities">
                                            <option>Cities</option>
                                            <option>Riga</option>
                                            <option>Melbourne</option>
                                            <option>Vienna</option>
                                            <option>Vancouver</option>
                                            <option>Toronto</option>
                                            <option>Calgary</option>
                                            <option>Adelaide</option>
                                            <option>Perth</option>
                                            <option>Auckland</option>
                                            <option>Helsinki</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="catagories">
                                            <option>Property Catagories</option>
                                            <option>Apartment</option>
                                            <option>Bar</option>
                                            <option>Farm</option>
                                            <option>House</option>
                                            <option>Store</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4 col-lg-4">
                                    <div class="form-group">
                                        <select class="form-control" id="offers">
                                            <option>Property Location</option>
                                            <option>100% OFF</option>
                                            <option>75% OFF</option>
                                            <option>50% OFF</option>
                                            <option>25% OFF</option>
                                            <option>10% OFF</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-12 d-flex justify-content-between align-items-end">
                                    <!-- More Filter -->
                                    <div class="more-filter">
                                        <a href="#" id="moreFilter">+ More filters</a>
                                    </div>
                                    <!-- Submit -->
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn south-btn">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Advance Search Area End ##### -->
<section class="featured-properties-area section-padding-50">
        <div class="container">
            <div class="row">
            	<div class="col-12"><h6 align="center"><img class="img-responsive" src="<?php print base_url();?>img/new/propertymartGIF.gif"/></h6></div>
			</div>
	  </div>
</section>
    <!-- ##### Featured Properties Area Start ##### -->
    <section style="background: #FCF8F8;" class="featured-properties-area section-padding-25">
        <div class="container">
            <div class="row" style="margin-bottom: -50px;">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp">
                        <h2>Featured Properties</h2>
                        <p><?php print $siteInfo['siteName'];?> present you with the best and more comfortable properties in Nigeria. Find properties made easy all over 9ja.</p>
                    </div>
                </div>
            </div>

            <div class="row">
            <div style="margin-bottom: -80px !important;" class="col-12">
                    <div style="width: 100%; text-align: left;" class="pull-left section-heading wow fadeInUp">
                        <h2>PROPERTIES(House)</h2>
                        <hr>
                        
                    </div> 
                </div>
                
<?php if(count($property_data)>1){
				for($i=0;$i<count($property_data);$i++){?>	
				<div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="<?php print base_url();?>property_upload/<?php print $property_data[$i]['property_thumbnail'];?>" alt="<?php print $property_data[$i]['property_title'];?>">

                            <div class="tag">
                                <span><?php print $property_data[$i]['property_category'];?></span>
                            </div>
                            <div class="list-price">
                                <p><?php if($property_data[$i]['currency']=='NG'){print '₦';}else{print '$';};?>
                                <?php print number_format($property_data[$i]['property_price']);?></p>
                            </div>
                        </div>
                        
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php print $reduce_text_lent($property_data[$i]['property_title'], 25);?> </h5>
                            <p class="location"><img src="<?php print base_url();?>img/icons/location.png" alt="">
                            <?php print $reduce_text_lent($property_data[$i]['property_location'], 30);?></p>
                            <p class="desc_hight"><?php print $reduce_text_lent($property_data[$i]['property_description'], 90);?></p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                              <?php if($property_data[$i]['property_type']!='Land'){?>
                               
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/bedroom.png" alt="">
                                    <span><br /><?php print $property_data[$i]['no_of_rooms'];?> Rooms</span>
                                </div>
                                
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/toilet-icon.png" alt="">
                                    <span><br /><?php print $property_data[$i]['no_of_toilets'];?> Toilets</span>
                                </div>
                                
                                <div class="bathroom">
                                   <img src="<?php print base_url();?>img/icons/available1.png" alt="">
                                    <span style="color: #60EC27;"><br /><?php print $property_data[$i]['property_status'];?></span>
                                </div>
                                
                                <?php }else{?>
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/space.png" alt="">
                                    <span><?php print $property_data[$i]['total_land_area'];?> sqm Total Area</span>
                                </div>
                                <?php }?>
                                <div class="space">
                                    
                                    <a href="<?php print base_url();?>pages/view/detailed/<?php print $property_data[$i]['id'];?>/<?php print trim(str_replace(" ","-",$property_data[$i]['property_title']));?>"><span style="color: #E37F1C;">+ Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                <?php }else{
	print '<h3 class="alert alert-info col-12">No Record Found!</h3>';
}?>
              

            </div>
        </div>
    </section>
    
<section class="featured-properties-area section-padding-50">
        <div class="container">
            <div class="row">
            <div style="margin-bottom: -80px !important;" class="col-12">
                    <div style="width: 100%; text-align: left;" class="pull-left section-heading wow fadeInUp">
                        <h2>Featured Agents</h2>
                        <hr>
                    </div> 
                </div>
            </div> 
         </div>
 <div class="container">
   <div class="row">           	
	<div id="carouselExample" class="carousel slide" data-ride="carousel" data-interval="9000">
        <div class="carousel-inner row w-100 mx-auto" role="listbox">
            <div class="carousel-item col-md-3  active">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 1" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=1" alt="slide 1">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 3" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=2" alt="slide 2">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 4" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=3" alt="slide 3">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 5" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=4" alt="slide 4">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
              <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 6" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=5" alt="slide 5">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 7" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=6" alt="slide 6">
                    </a>
                  </div>
                </div>
            </div>
            <div class="carousel-item col-md-3 ">
               <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 8" class="thumb">
                      <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=7" alt="slide 7">
                    </a>
                  </div>
                </div>
            </div>
             <div class="carousel-item col-md-3  ">
                <div class="panel panel-default">
                  <div class="panel-thumbnail">
                    <a href="#" title="image 2" class="thumb">
                     <img class="img-fluid mx-auto d-block" src="//via.placeholder.com/600x400?text=8" alt="slide 8">
                    </a>
                  </div>
                  
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next text-faded" href="#carouselExample" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    
	 </div>
   </div>
</section>
    
   <section style="background: #FCF8F8;" class="featured-properties-area section-padding-50">
        <div class="container">

            <div class="row">
             <div style="margin-bottom: -80px !important;" class="col-12">
                    <div style="width: 100%; text-align: left;" class="pull-left section-heading wow fadeInUp">
                        <h2>PROPERTIES(Land)</h2>
                        <hr>
                    </div> 
                </div>
                
                <?php if(count($property_data_land)>1){
				for($i=0;$i<count($property_data_land);$i++){?>	
				<div class="col-12 col-md-6 col-xl-4">
                    <div class="single-featured-property mb-50 wow fadeInUp" data-wow-delay="100ms">
                        <!-- Property Thumbnail -->
                        <div class="property-thumb">
                            <img src="<?php print base_url();?>property_upload/<?php print $property_data[$i]['property_thumbnail'];?>" alt="<?php print $property_data_land[$i]['property_title'];?>">

                            <div class="tag">
                                <span><?php print $property_data_land[$i]['property_category'];?></span>
                            </div>
                            <div class="list-price">
                                <p><?php if($property_data_land[$i]['currency']=='NG'){print '₦';}else{print '$';};?><?php print number_format($property_data_land[$i]['property_price']);?></p>
                            </div>
                        </div>
                        
                        <!-- Property Content -->
                        <div class="property-content">
                            <h5><?php print $reduce_text_lent($property_data_land[$i]['property_title'], 25);?> </h5>
                            <p class="location"><img src="<?php print base_url();?>img/icons/location.png" alt="">
                            <?php print $reduce_text_lent($property_data_land[$i]['property_location'], 25);?></p>
                            <p class="desc_hight"><?php print $reduce_text_lent($property_data_land[$i]['property_description'], 90);?></p>
                            <div class="property-meta-data d-flex align-items-end justify-content-between">
                              <?php if($property_data_land[$i]['property_type']!='Land'){?>
                               
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/bedroom.png" alt="">
                                    <span><br /><?php print $property_data_land[$i]['no_of_rooms'];?> Rooms</span>
                                </div>
                                
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/toilet-icon.png" alt="">
                                    <span><br /><?php print $property_data_land[$i]['no_of_toilets'];?> Toilets</span>
                                </div>
                                
                                <div class="bathroom">
                                   <img src="<?php print base_url();?>img/icons/available1.png" alt="">
                                    <span style="color: #60EC27;"><br /><?php print $property_data_land[$i]['property_status'];?></span>
                                </div>
                                
                                <?php }else{?>
                                <div class="bathroom">
                                    <img src="<?php print base_url();?>img/icons/space.png" alt="">
                                    <span><?php print $property_data[$i]['total_land_area'];?> sqm Total Area</span>
                                </div>
                                <?php }?>
                                <div class="space">
                                    
                                    <a href="<?php print base_url();?>pages/view/detailed/<?php print $property_data_land[$i]['id'];?>/<?php print trim(str_replace(" ","-",$property_data_land[$i]['property_title']));?>"><span style="color: #E37F1C;">+ Details</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php }?>
                
                <?php }else{
	print '<h3 class="alert alert-info col-12">No Record Found!</h3>';
}?>

                
            </div>
        </div>
    </section>
    <!-- ##### Featured Properties Area End ##### -->

    <!-- ##### Call To Action Area Start ##### -->
    <section class="call-to-action-area bg-fixed bg-overlay-black" style="background-image: url(<?php print base_url();?>img/bg-img/online-property-listing.jpg)">
        <div class="container h-100">
            <div class="row align-items-center h-100">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 class="wow fadeInUp" data-wow-delay="300ms">Are you looking for a place to rent?</h2>
                        <h6 class="wow fadeInUp" data-wow-delay="400ms">Well search no more because <?php print $siteInfo['siteName'];?> is here to easy the process, all you need do is get in touch with us.</h6>
                        <a href="<?php print base_url();?>users/make-request" class="btn south-btn mt-50 wow fadeInUp" data-wow-delay="500ms">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Call To Action Area End ##### -->

    <!-- ##### Editor Area Start ##### -->
    <section style="box-shadow: 0 4px 8px 0 rgba(0, 90, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" class="south-editor-area d-flex align-items-center">
        <!-- Editor Content -->
        <div class="editor-content-area">
            <!-- Section Heading -->
            <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                <img src="<?php print base_url();?>img/icons/prize.png" alt="">
                <h2>About Us</h2>
                <p>(<?php print $siteInfo['siteName'];?>)</p>
            </div>
            <p class="wow fadeInUp" data-wow-delay="500ms">Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odiomattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna. Curabitur rhoncus auctor eleifend. Fusce venenatis diam urna, eu pharetra arcu varius ac. Etiam cursus turpis lectus, id iaculis risus tempor id. Phasellus fringilla nisl sed sem scelerisque, eget aliquam magna vehicula. <a><em style="color: green;">read more</em></a></p>
            <div class="address wow fadeInUp" data-wow-delay="750ms">
                <h6><img src="<?php print base_url();?>img/icons/phone-call.png" alt=""> +45 677 8993000 223</h6>
                <h6><img src="<?php print base_url();?>img/icons/envelope.png" alt=""> office@template.com</h6>
            </div>
            
        </div>

        <!-- Editor Thumbnail -->
        <div class="editor-thumbnail">
            <img src="<?php print base_url();?>img/new/about.png" alt="">
        </div>
    </section>
    <!-- ##### Editor Area End ##### -->
   
    <!-- ##### Testimonials Area Start ##### -->
    <section class="south-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading wow fadeInUp" data-wow-delay="250ms">
                        <h2>...what they say about us</h2>
                        <p>We give the best agency services ever that's why our clients have good things to say about us. Tell us what you need and we'll help you find it.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div style="height: 400px !important;" class="testimonials-slides owl-carousel wow fadeInUp" data-wow-delay="500ms">

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="<?php print base_url();?>img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="<?php print base_url();?>img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>

                        <!-- Single Testimonial Slide -->
                        <div class="single-testimonial-slide text-center">
                            <h5>Perfect Home for me</h5>
                            <p>Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit amet tellus blandit. Etiam nec odio vestibulum est mattis effic iturut magna. Pellentesque sit am et tellus blandit. Etiam nec odio vestibul. Etiam nec odio vestibulum est mat tis effic iturut magna.</p>

                            <div class="testimonial-author-info">
                                <img src="<?php print base_url();?>img/bg-img/feature6.jpg" alt="">
                                <p>Daiane Smith, <span>Customer</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Testimonials Area End ##### -->