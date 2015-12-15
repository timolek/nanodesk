<?php 
	//insert this view
	include('snippets/header.php'); 
?>

<div class="site-container site-main">
	<div class="container">
		<div class="row no-gutter site-main-holder">
			
			<?php include('snippets/aside-nav.php'); ?>

			<div class="col-md-9 site-main__content-holder">
				<main class="site-main__content">
					<h2>Add new</h2>
					<div class="module">
						<div class="module-block__header" style="display:none;">
							<i class="glyphicon glyphicon-upload"></i> Edit paper
						</div>
						<div class="module-block__content  no-space">
							<form action="<?php echo ROOT.'/'.$_GET['p'].'/'.$add_to_url.'/'; ?>" method="POST">
								<div class="form-group">
									<label for="doi">DOI:</label>
									<input type="text" class="form-control" id="doi" name="doi" value="http://" required>
								</div>

								<div class="form-group" style="display:none;">
									<label for="exampleInputFile">File input</label>
									<input type="file" id="exampleInputFile">
									<p class="help-block">Example block-level help text here.</p>
								</div>

								<div class="form-group">
									<label for="something">Does something</label>
									<select name="doi_option" id="something" class="form-control">
										<option value="Confirms">Confirms</option>
										<option value="Refutes">Refutes</option>
										<option value="option 3">option 3</option>
									</select>
								</div>

								<div class="form-group">
									<label for="doi2">About this paper (DOI)</label>
									<input type="text" class="form-control" id="doi2" name="doi2" placeholder="http://" value="http://"  required>
								</div>

								<div class="form-group text-right">
									<input type="text" name="action" value="<?php echo ($_GET['var'] !='' || $add_to_url !='') ? "update":"insert"; ?>">
									<input type="text" name="paper_id" value="<?php echo $_GET['var']?>">
									<button type="submit" class="btn btn-md btn-primary"><i class="glyphicon glyphicon-ok"></i> Save</button>
								</div>

							</form>
						</div>
					</div>

					<div class="module module--default" style="display:none;">
						<div class="module-block__header">
							<i class="glyphicon glyphicon-bookmark"></i> Block title
						</div>
						<div class="module-block__content">
							<form>
								<div class="form-group">
									<label for="exampleInputEmail1">Email address</label>
									<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
									</div>
								
								<div class="checkbox">
									<label>
									  <input type="checkbox"> Check me out
									</label>
								</div>
								<button type="submit" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div><!--// module-->
				</main>				
			</div>
		</div>
	</div>
</div><!--//site container-->


<?php include('snippets/footer.php');  ?>
