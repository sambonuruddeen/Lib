<div class="about-heading">
		<h2>Faculty of <span><?php echo $faculty_name; ?></span></h2>
	</div>
	<!-- //about-heading -->
	<!-- plans -->
	<!-- shared-grid --><div class="vpn-grid">
		<div class="container">
			<div class="w3-banner-bottom-heading">
				<h3><span>Departments</span></h3>
			</div>
			<div class="row">
			<div class="col-md-12">
			<?php foreach($departments as $dept) { ?>
			<div class="col-md-4">
			<div class="categories">
						<h4><?php echo $dept['department']; ?></h4>

						<ul class="marked-list offs1">
						<?php foreach($categories as $category) { ?>
							<li><a href="<?=site_url('collections/dept_collections/'.$faculty_name.'/'.$dept['dept_id'].'/'.$category['category_id'])?>"><?php echo plural($category['category'])." (".$this->collections_model->dept_collection($dept['dept_id'], $category['category_id']).")"; ?></a></li>
							<?php }  ?>
						</ul>
					</div>

</div>

<?php } ?>
</div>
</div>
			<!--	<div class="col-md-3 vpn-pricing-grid">
					<div class="w3-agileits-vpn-grid">
						<div class="agileinfo-price yellow-agileinfo-price">
							<h3>Agric Econs & Ext.</h3>
							<h5>Digital Learning Materials</h5>
						</div>
						<div class="price-bg">
							
							<ul class="count">
								<li> 24 Articles</li>
								<li> 12 Research Papers</li>
								<li> 5 Theses</li>
								<li> 30 E-Journals</li>
							</ul>
							<div class="wthree-price-button yellow-wthree-price-button">
								<a href="#">Open</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 vpn-pricing-grid">
					<div class="w3-agileits-vpn-grid">
						<div class="agileinfo-price green-agileinfo-price">
							<h3>Crop Production</h3>
							<h5>Digital Learning Materials</h5>
						</div>
						<div class="price-bg">
							
							<ul class="count">
								<li> 24 Articles</li>
								<li> 12 Research Papers</li>
								<li> 5 Theses</li>
								<li> 30 E-Journals</li>
							</ul>
							<div class="wthree-price-button green-wthree-price-button">
								<a href="#">Open</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 vpn-pricing-grid">
					<div class="w3-agileits-vpn-grid">
						<div class="agileinfo-price red-agileinfo-price">
							<h3>Unlimited</h3>
							<h5>Create for Domestic Use</h5>
						</div>
						<div class="price-bg">
							<p class="price-label-4">$<span>20</span>monthly</p> 
							<ul class="count">
								<li> 24/7 Tech Support</li>
								<li> Advanced Options</li>
								<li> 500GB Storage</li>
								<li> 5GB BandWidth</li>
							</ul>
							<div class="wthree-price-button red-wthree-price-button">
								<a href="registration.html">Sign Up</a>
							</div>
						</div>
					</div>
				</div>-->
				<div class="clearfix"> </div>
			
		</div>
	</div>
	<!-- //vpn-grid -->
	<!-- cloud-grid -->
	<div class="cloud-grid">
		<div class="container">
			<div class="w3-banner-bottom-heading">
				<h3>Faculty Collections<span></span></h3>
			</div>
			<div class="agileinfo-top-grids">
					<div class="col-sm-4 wthree-top-grid">
									<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="#" class="huge"><li >Articles</li></a>
										</ul>
									</div>
									<div class="clearfix">&nbsp;</div>
									<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="" class="medium"><li>Research Papers</li></a>
										</ul>
									</div>
					</div>
					<div class="col-sm-4 wthree-top-grid">
						<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="#" class="huge"><li>E-Journals</li></a>
										</ul>
									</div>
									<div class="clearfix">&nbsp;</div>
									<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="" class="huge"><li>Theses</li></a>
										</ul>
									</div>
					</div>
					<div class="col-sm-4 wthree-top-grid">
						<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="#" class="huge"><li>Reports</li></a>
										</ul>
									</div>
									<div class="clearfix">&nbsp;</div>
									<div class="choose-info-grid ">
										<ul>
											<li><i class="fa fa-book fa-5x" aria-hidden="true"></i></li>
											<a href="" class="huge"><li>Books</li></a>
										</ul>
									</div>
					</div>
					<div class="clearfix"> </div>
				</div>
		</div>
	</div>
	<!-- //cloud-grid -->
	<!-- vpn-grid -->
	
	<div class="shared-grid">
		<div class="container">
			<div class="w3-banner-bottom-heading">
				<h3>Digital Multimedia <span>Collections</span></h3>
			</div>
			<div class="priceing-table-main">
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr1">
							<h4>Images</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li>Full access</li>
									<li>Documentation</li>
									<li>Customers Support</li>
									<li>Free Updates</li>
									<li>Unlimited Domains</li>
								</ul>
							</div>
							<div class="price-selet pric-sclr1">		    			   
								<a href="#">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr2">
							<h4>Music</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li>Full access</li>
									<li>Documentation</li>
									<li>Customers Support</li>
									<li>Free Updates</li>
									<li>Unlimited Domains</li>
								</ul>
							</div>
							<div class="price-selet pric-sclr2">
								<a href="#">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr3">
							<h4>Recordings</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li>Full access</li>
									<li>Documentation</li>
									<li>Customers Support</li>
									<li>Free Updates</li>
									<li>Unlimited Domains</li>
								</ul>
							</div>
							<div class="price-selet pric-sclr3">
								<a href="#">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-3 price-grid wthree">
					<div class="price-block agile">
						<div class="price-gd-top pric-clr4">
							<h4>Maps</h4>
						</div>
						<div class="price-gd-bottom">
							<div class="price-list">
								<ul>
									<li>Full access</li>
									<li>Documentation</li>
									<li>Customers Support</li>
									<li>Free Updates</li>
									<li>Unlimited Domains</li>
								</ul>
							</div>
							<div class="price-selet pric-sclr4">
								<a href="#">More</a>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //shared-grid -->
	<!-- //plans -->