<div class="about-heading">
		<h2>Search Portal</h2>
	</div>
	<!-- //about-heading -->
<div class="registration">
		<div class="container">
			<div class="row" style="width: 80%; margin: 0 auto;">
			<div class="text-success"><?=count($search_result)?> Records Found</div>
				<h3>Search Result: <span class="text-primary"><?php echo ucfirst($search_query); ?></span></h3>

				<?php if (count($search_result) > 0) { ?>
				<table class="table">

<thead>
	<tr>
		<th>#</th>
		<th>Author</th>
		<th>Title</th>
		<th>Department</th>
		<th>Faculty</th>
		<th></th>
	</tr>
</thead>

<tbody>
<?php foreach($search_result as $single) { ?>
	<tr>
		<td>#</td>
		<td><?=$single['author']?></td>
		<td><?=$single['title']?></td>
		<td><?=$single['department']?></td>
		<td><?=$single['faculty']?></td>
		<td><a href="<?=base_url().'public/uploads/'.$single['collection_id'].".pdf";?>"><i class="glyphicon glyphicon-open-file"></i>Open</a></td>
	</tr>
	<?php } ?>
</tbody>
</table>
<?php } else { 
echo '<h3 class="text-danger">No Records Found!</h3>';
echo '<div class="text-info">'.anchor('#', 'Click here for the advanced search portal').'</div>';
		}
	?>
			</div>
		</div>
</div>