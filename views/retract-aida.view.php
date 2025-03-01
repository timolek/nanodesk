<?php
	//insert this view
	include('snippets/header.php');
?>
<div class="site-container site-main">
	<div class="container">
		<div class="row no-gutter site-main-holder">

			<div class="col-md-12">
				<div class="row">
					<h2 class="text-center text-upper">Retract AIDA</h2>
					<!-- <p class="text-center">All those papers, all in one place.</p> -->
				</div>
				<main class="site-main__content">
					<div class="module module--list">
						<form class="ajaxform ajax-required" action="<?php echo ROOT.'/ajax/retract_aida.php'; ?>" method="POST">
							<div style="display:block; overflow:hidden; position:relative; width:100%;">
							<div class="box-h-50 box-v-50">
								<div class="row alert alert-warning text-center">
									<div class="col-xs-1">
										<i class="glyphicon glyphicon-warning-sign"></i>
									</div>
									<div class="col-xs-10">
										Are you sure you want to retract this entry?
										It will create a new nanopub stating you delteted this publication.
									</div>
								</div>

								<table class="table table-striped">
									<tr><td><strong>AIDA Sentence</strong></td><td><?php echo $row['sentence'] ?></td></tr>
									<tr><td><strong>Paper</strong></td><td><?php echo $row['paper']['title']; ?></td></tr>
									<tr><td><strong>Created on</strong></td><td><?php echo date('M d Y', strtotime($row['date'])); ?></td></tr>
								</table>


								<div class="form-group text-center pd-10">
									<input type="hidden" name="action" value="retract">
									<input type="hidden" name="id" value="<?php echo $_GET['var']; ?>">
									<input type="hidden" name="np_uri" value="<?php echo $row['np_uri'] ?>">
									<input type="hidden" name="uid" value="<?php echo $login->get_login_info('id'); ?>">
									<button type="submit" class="ajaxsubmit ajax-required-submit btn btn-lg btn-danger">
										<i class="glyphicon glyphicon-xupload"></i>  Retract
									</button>
								</div>
								<div class="form-group text-center pd-10">
									<div class="alert alert-danger text-center" style="display:none;">
										There was an error while uploading. Please try again in a few mintutes.
									</div>
								</div>

							</div>
						</div>
						</form>
					</div>
				</main>
			</div>
		</div>
	</div>
</div><!--//site container-->


<?php include('snippets/footer.php');  ?>
