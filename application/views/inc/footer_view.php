<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-4 agile-footer-grid">
					<h4>Working <span>Hours</span></h4>
<table class="table force">
								<thead>
									<tr>
										<th><span>Day</span></th>
										<th><span>Opening Hour</span></th>
										<th><span>Closing Hour</span></th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td><span>Weekdays</span></td>
										<td><span>8:00 am</span></td>
										<td><span>10:00 pm</span></td>
									</tr>
									<tr>
										<td><span>Saturdays</span></td>
										<td><span>8:00 am</span></td>
										<td><span>10:00 pm</span></td>
									</tr>
									<tr>
										<td><span>Sundays</span></td>
										<td><span>8:00 am</span></td>
										<td><span>10:00 pm</span></td>
									</tr>
									
								</tbody>
							</table>					
				</div>
				
				<div class="col-md-4 agile-footer-grid">
					<h4>Our <span>Partners</span></h4>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/6.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/7.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/8.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/9.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids agileits-w3layouts-popular">
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/10.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/4.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/6.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/7.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="popular-grids">
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/8.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/9.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/10.jpg" alt=""></a>
						</div>
						<div class="popular-grid">
							<a href="#"><img src="<?=base_url()?>public/images/4.jpg" alt=""></a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				
				<div class="col-md-4 agile-footer-grid">
					<h4>Contact <span>Us</span></h4>
					<ul class="w3agile_footer_grid_list">
						
						<li> <span><i class="glyphicon glyphicon-home" aria-hidden="true"></i> Address: </span></li></li>
						<li><span><i class="glyphicon glyphicon-phone" aria-hidden="true"></i> Phone: </span></li></li>
						<li><span><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i> Email: </span></li></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="copyright">
			<p>© 2016 Hosting City. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
		</div>
	</div>
	<!-- //footer -->
	<script src="<?=base_url()?>public/js/jarallax.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="<?=base_url()?>public/js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/move-top.js"></script>
	<script type="text/javascript" src="<?=base_url()?>public/js/easing.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- pricing -->
	<script src="<?=base_url()?>public/js/jquery.flipster.js"></script>
	<script>
	<!--
		
		$(function(){ $(".flipster").flipster({ style: 'coverflow', start: 'center' }); });

	-->
	</script>
	<!-- //pricing -->
	<!-- slider -->
	<script type="text/javascript" src="<?=base_url()?>public/js/jquery.immersive-slider.js"></script>
	<!-- //slider -->
</body>	
</html>