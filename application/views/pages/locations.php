  <section class="listings-content-wrapper section-padding-100">
       <div style="padding-top: 50px;" class="container hidden-xs"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <div style="margin-bottom: 30px;" class="section-heading wow fadeInUp">
                        <h2>Featured Locations/States</h2>
                        <p><?php print $siteInfo['siteName'];?> present you with the best and more comfortable properties in Nigeria. Find properties made easy all over 9ja.</p>
                    </div>
                </div>
				<div class="col-12">
					<p><?php for($i=0;$i<count($states);$i++){?>
							<a href="<?php print base_url();?>pages/properties/states/<?php echo $states[$i];?>"> <i class="fa fa-check" aria-hidden="true"></i> <?php echo $states[$i];?></a> |
						<?php }?>
					</p>
				</div>
                <div class="col-12">
               	 <div style="margin-top: -50px;" class="listings-content wow fadeInUp" data-wow-delay="750ms">
                	 <!--<ul class="listings-core-features d-flex align-items-center">
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Independence layout(Enugu)</a> </li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Agu-Owa Trans-Ekulu(Enugu)</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Fireplace</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Ocean Views</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Heated Floors</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Private Patio</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Window Shutters</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Fireplace</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Beach Access</a></li>
                            <li><a href="#"><i class="fa fa-check" aria-hidden="true"></i> Rooftop Terrace</a></li>
                        </ul>-->
                </div>
               </div>
            </div>
	 </div>
</section>