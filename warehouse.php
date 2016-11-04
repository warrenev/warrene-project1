<?php include 'header.php'?>

<div id="page-wrapper" style="min-height: 680px;">
		<h4>Warehouse List</h4><hr />
		<div class="col-lg-9"></div>
		<div class="col-lg-3">
			<li class="list-unstyled">
				<div class="input-group custom-search-form">
					<input type="text" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
					</span>
				</div>
			</li>
		</div>
	<div class="col-md-12"><br />
			<div class="panel panel-default">
		<div class="panel-body">
			<table class="table table-bordered">
				
				<thead>
					<tr>
						<td><b>Warehouse name</b></td>
						<td><b>Warehouse Address</b></td>
						<td><b>Zip Code</b></td>
						<td><b>Option</b></td>
					</tr>
				</thead>
				
				<tbody>
							
																																					<tr>
						<td>Chronotron Inc.</td>
						<td>Sta cruz Manila</td>
						<td>2421</td>
						<td>
							<div class="col-md-6">	
								<button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Edit</button>
								<button type="button" class="btn btn-danger" >Delete</button>

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
													<label for="usr">Warehouse Name*</label>
													<input type="text" class="form-control" id="usr">
													<label for="usr">Warehouse Address*</label>
													<input type="text" class="form-control" id="usr">
													<label for="usr">Province*</label>
													<input type="text" class="form-control" id="usr">
													<label for="usr">City or Municipality*</label>
													<input type="text" class="form-control" id="usr">
													<label for="usr">Barangay or District*</label>
													<input type="text" class="form-control" id="usr">
													<label for="usr">Zip Code*</label>
													<input type="text" class="form-control" id="usr">
												</div>
											</div>
											<!--<div class="modal-body">
												<div class="form-group">
													<label for="usr">New Number</label>
													<input type="text" class="form-control" id="usr">
												</div>
											</div>-->
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
												<button type="button" class="btn btn-success" data-dismiss="modal">Save</button>
											</div>
										</div>
									</div>
								</div>
								
							</div>
							
						</td>
					</tr>	         											
				</tbody>
				
			</table>
			<div class="col-md-12 text-left">	
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Add Address</button>

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
									<label for="usr">Warehouse Name*</label>
									<input type="text" class="form-control" id="usr">
									<label for="usr">Warehouse Address*</label>
									<input type="text" class="form-control" id="usr">
									<label for="usr">Province*</label>
									<input type="text" class="form-control" id="usr">
									<label for="usr">City or Municipality*</label>
									<input type="text" class="form-control" id="usr">
									<label for="usr">Barangay or District*</label>
									<input type="text" class="form-control" id="usr">
									<label for="usr">Zip Code*</label>
									<input type="text" class="form-control" id="usr">
								</div>
							</div>
							<!--<div class="modal-body">
								<div class="form-group">
									<label for="usr">New Number</label>
									<input type="text" class="form-control" id="usr">
								</div>
							</div>-->
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								<button type="button" class="btn btn-default" data-dismiss="modal">Save</button>
							</div>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
		<br />
		<hr />
	</div>
</div>