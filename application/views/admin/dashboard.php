<!-- about-heading -->
	<div class="about-heading">
		<h2>Registration <span>Hosting City</span></h2>
	</div>
	<!-- //about-heading -->
<div class="registration">
		<div class="container">
			<div class="signin-form profile">
				<h3>Register</h3>
				
				<div class="login-form">
                                    <form action="<?=  site_url('admin/dashboard')?>" method="post" enctype="multipart/form-data">
                                            <p>Upload Category:
                                            <select name="faculty">
                                                <option value="1">Agriculture</option>
                                                <option value="2">Education</option>
                                                <option value="3">Environmental</option>
                                                <option value="4">Science</option>
                                            </select>
                                            <select name="category">
                                                <option value="1">Book</option>
                                                <option value="2">Journal</option>
                                                <option value="3">Thesis</option>
                                                <option value="4">Report</option>
                                            </select>
                                            </p>
						<input type="text" name="title" placeholder="Book Title" required="">
						<input type="text" name="author" placeholder="Author" required="">
						<input type="text" name="isbn" placeholder="ISBN" required="">
                                                <textarea name="keywords" placeholder="Book Description/Keywords"></textarea>
                                                <label>Select File: <input type="file" name="book" /></label>
                                                <input type="submit" name="upload" value="REGISTER">
					</form>
				</div>
				
			</div>
		</div>
	</div>