<!-- about-heading -->
	<div class="about-heading">
		<h2>Administrator Login </h2>
	</div>
	<!-- //about-heading -->
	<div class="registration">
		<div class="container">
			<div class="signin-form profile">
				<h3>Login</h3>
                                <?php if($this->session->flashdata('loginError')) { 
                                    
                                   echo '<div class="alert alert-danger" role="alert">';
                                   echo $this->session->flashdata('loginError');
                                   echo '</div>';
                                }?>
                                
				<div class="login-form">
					<form action="<?=site_url('home/login')?>" method="post">
                                            <input type="text" name="email" placeholder="E-mail" value="<?php echo set_value('email'); ?>" required="">
                                                <input type="password" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>" required="">
						<div class="tp">
							<input type="submit" value="LOGIN NOW">
						</div>
					</form>
				</div>
                                
				<p><a href="#">Username: admin & Password: admin </p>
			</div>
		</div>
	</div>