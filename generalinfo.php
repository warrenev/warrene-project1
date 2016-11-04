<br />
	<div class="col-md-12">
		<h4>Profile Photo</h4>
		<br />
		<hr />
	</div>
	<div class="col-md-12">
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
		</script>
	</div>

	<div class="col-md-12">
		<h4>Cover Photo</h4>
		<br />
		<hr />
	</div>
	<div class="col-md-12">
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
		</script>
	</div>
	<br />
	<br />
	<br />
	<div class="col-md-12">
		<h4>Store Information</h4>
		<br />
		<hr />
	</div>
	<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<td><b>Seller ID</b></td>
						<td><b>Store Name</b></td>
						<td><b>Mobile Number</b></td>
					</tr>
				</thead>
				
				<tbody>
																																									<tr>
						<td>0192034832932</td>
						<td>Bragy. maligaya street sampaloc baguio</td>
						<td><a href="#">01920348329</a></td>
					</tr>									
				</tbody>
				
			</table>
			<div class="col-md-12 text-right">	
				<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Change Number</button>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
					<div class="modal-dialog">

						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="usr">Old Number</label>
									<input type="text" value="01920348329" disabled class="form-control" id="usr">
								</div>
							</div>
							<div class="modal-body">
								<div class="form-group">
									<label for="usr">New Number</label>
									<input type="text" class="form-control" id="usr">
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="col-md-12 text-left">	
		<a href="#">Visit Link</a>
		<br />
	</div>
		<br />
		<br />

