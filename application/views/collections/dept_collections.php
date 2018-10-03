<div class="about-heading">
		<h2>Faculty of <span><?php echo $faculty_name; ?></span></h2>
	</div>
	<!-- //about-heading -->
	<!-- plans -->
	<!-- shared-grid --><div class="vpn-grid">
		<div class="container">
			<div class="w3-banner-bottom-heading">
				<div class="big"><span><?php echo plural($categories[0]['category']); ?>: </span> Department of <?php echo $department; ?></div>

				
				<div class="clearfix">&nbsp;</div>
				<div class="row">
					<div class="col-lg-12">
					<?php foreach ($collections as $sinlge) { ?>
						
						<div class="col-md-2">
						 <div class="panel panel-info">
                           <a href="<?=base_url().'public/uploads/'.$sinlge['collection_id'].".pdf";?>"> 
                           	<div class="panel-heading anima">
                                <div class="row">
                                    <div class="col-xs-12">
                                       
                                        <div class="glyphicon glyphicon-open-file"><?php echo Ucfirst($sinlge['title']).'.pdf'; ?> </div>
                                    </div>
                                </div>
                            </div></a>

                             <a href="<?=site_url('collections/download/'.$sinlge['collection_id']);?>" target="_blank" title="Open Document">
                                <div class="panel-footer">
                                    <span class="pull-left">Download </span>
                                    <span class="pull-right"><i class="fa fa-download"></i></span>

                                    <div class="clearfix"></div>
                                </div>
                            </a>
                            </div>
							
						</div>
						<?php } ?>
							
					
					</div>
				</div>
			</div>
</div>
</div>
