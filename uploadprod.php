<?php include 'header.php'?>
<div id="page-wrapper" style="min-height: 680px;">
	<div class="container">
		<div class="col-lg-8">
			<h3>Product Detail</h3>
		</div>
	<div class="col-lg-4">
		<a href="#" class="btn btn-warning">Cancel</a>
		<a href="#" class="btn btn-success">Upload it Now</a>
		<a href="#" class="btn btn-info">Save as Draft</a>
	</div>
	
	</div>
	<div class="container">
		<h4>Product Details</h4></br>
		<div class="col-lg-3">
			<script src="/js/plugins/canvas-to-blob.js"></script>
					<script src="/js/fileinput.js"></script>
					<input id="input-image-2" name="input-image" type="file" class="file-loading" accept="image/*">
					<script>
					$("#input-image-2").fileinput({
						uploadUrl: "/site/image-upload",
						allowedFileExtensions: ["jpg", "png", "gif"],
						maxImageHeight: 150,
						maxFileCount: 1,
						resizeImage: true
					}).on('filepreupload', function() {
						$('#kv-success-box').html('');
					}).on('fileuploaded', function(event, data) {
						$('#kv-success-box').append(data.response.link);
						$('#kv-success-modal').modal('show');
					});
			</script><br/>
		</div>
		<div class="col-lg-9">
			<div class="form-group">
				<label for="usr">SKU*</label>
				<input type="text" class="form-control" id="usr">
				<label for="usr">Product Name*</label>
				<input type="text" class="form-control" id="usr">
				<label for="usr">Short Description*</label>
				<textarea type="text" class="form-control"></textarea>
				<label for="usr">Brand*</label>
				<input type="text" class="form-control" id="usr"><br />
				
				<div class="col-md-12 text-left">	
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Select Category</button>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">

						<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<br />
									<h5 class="text-left">Select Category</h5>
								</div>
								
								<div class="modal-body">
									<div class="col-lg-4 text-center">
										<label>Main Category</label>
									</div>
									<div class="col-lg-4 text-center">
										<label>Sub category</label>
									</div>
									<div class="col-lg-4 text-center">
										<label>Others</label>
									</div>
									<br />
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
									<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				
			</div>
		
		</div>
	</div>
	<div class="container"><hr />
		<div class="form-group">
			<label for="usr">Complete Description*</label>
			<textarea type="text" class="form-control"></textarea>
		</div>
		<div class="form-group">
				<label for="usr">Color*</label>
				<input type="text" class="form-control" id="usr">
				<label for="usr">Width*</label>
				<input type="text" class="form-control" id="usr">
				<label for="usr">Height*</label>
				<input type="text" class="form-control" id="usr"><br />
		</div><br />
	</div><hr />
	<div class="container">
	<h4>List of Product</h4>
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<td><b>Image</b></td>
						<td><b>SKU</b></td>
						<td><b>Product Name</b></td>
						<td><b>Short Description</b></td>
						<td><b>Category</b></td>
						<td><b>Quantity</b></td>
						<td><b>Product Specification</b></td>
					</tr>
				</thead>
				
				<tbody>
							
																																					<tr>
						<td>#</td>
						<td>KW2020-1212</td>
						<td>Aiza Watch</td>
						<td>This is the signatured watch of aiza</td>
						<td>HEA Watches</td>
						<td>10</td>
						<td>10mm, 143mm, water resistance, blue</td>
					</tr>
					<tr>
						<td>#</td>
						<td>KW2020-1212</td>
						<td>Aiza Watch</td>
						<td>This is the signatured watch of aiza</td>
						<td>HEA Watches</td>
						<td>10</td>
						<td>10mm, 143mm, water resistance, blue</td>
					</tr> 
					<tr>
						<td>#</td>
						<td>KW2020-1212</td>
						<td>Aiza Watch</td>
						<td>This is the signatured watch of aiza</td>
						<td>HEA Watches</td>
						<td>10</td>
						<td>10mm, 143mm, water resistance, blue</td>
					</tr>
					<tr>
						<td>#</td>
						<td>KW2020-1212</td>
						<td>Aiza Watch</td>
						<td>This is the signatured watch of aiza</td>
						<td>HEA Watches</td>
						<td>10</td>
						<td>10mm, 143mm, water resistance, blue</td>
					</tr>
					<tr>
						<td>#</td>
						<td>KW2020-1212</td>
						<td>Aiza Watch</td>
						<td>This is the signatured watch of aiza</td>
						<td>HEA Watches</td>
						<td>10</td>
						<td>10mm, 143mm, water resistance, blue</td>
					</tr>
				</tbody>
				
			</table>
		</div>
	</div>
		<br />
		<hr />
	</div>
</div>