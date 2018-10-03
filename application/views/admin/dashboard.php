<script type="text/javascript">
    $(function(){
        $("#faculty").change(function(){
          $.get("<?=  site_url('admin/dept')?>", {faculty_id:$("#faculty").val()}, function(data){
                                            
            $("#department").html(data);
          });
          return false;
        
        });
      });
</script>
<!-- about-heading -->
	<div class="about-heading">
		<h2>Upload Section</h2>
	</div>
	<!-- //about-heading -->
<div class="registration">
		<div class="container">
			<div class="signin-form profile">
				<h3>Register</h3>
				<?php if($this->session->flashdata('uploadSuccess')) { 
                                    
                                   echo '<div class="alert alert-success" role="alert">';
                                   echo $this->session->flashdata('uploadSuccess');
                                   echo '</div>';
                                } elseif($this->session->flashdata('uploadError')) { 
                                    
                                   echo '<div class="alert alert-danger" role="alert">';
                                   echo $this->session->flashdata('uploadError');
                                   echo '</div>';
                                }
                                ?>
				<div class="login-form">
                                    <form action="<?=  site_url('admin/dashboard')?>" method="post" enctype="multipart/form-data">
                                          
                                                <label> Faculty: </label>
                                            <select name="faculty" id="faculty">
                                                 <option>Select Faculty</option>
                                         <?php  foreach ($faculties as $faculty) { ?>
                                        <option value="<?php echo $faculty['faculty_id']; ?>"><?php echo $faculty['faculty']; ?></option>
                                                    <?php } ?>
                                            </select>
                                            <label> Department: </label>
                                            <select name="department" id="department">
                                                <option value="">Choose Department</option>
                                                
                                            </select>
                                                <label>Select Upload Category:</label>
                                            <select name="category">
                                                <option value="">Choose Category</option>
                                                <?php  foreach ($category as $cat) { ?>
                                        <option value="<?php echo $cat['category_id']; ?>"><?php echo $cat['category']; ?></option>
                                                    <?php } ?>
                                            </select>
                                          
						<input type="text" name="title" placeholder="Book Title" required="">
						<input type="text" name="author" placeholder="Author" required="">
						<input type="text" name="isbn" placeholder="ISBN" required="">
                                                <textarea name="keywords" placeholder="Book Description/Keywords"></textarea>
                                                <label>Select File <em>(PDF Only)</em>: <input type="file" name="book" /></label>
                                                <input type="submit" name="upload" value="REGISTER">
					</form>
				</div>
				
			</div>
		</div>
	</div>